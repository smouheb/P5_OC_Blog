<?php
/**
 * Controler to create, modify and delete posts
 *
 */
class ModelPost extends ModelConfig
{
    // Insert new posts into the DB
    Public function insertPost($title, $content)
    {
        $sql = 'INSERT INTO articles(title, content, date_article) VALUES (?,?,NOW())';

        $this->queryBdd($sql, array($title, $content));

    }
    //This is to select a specific post based on a click on the link where the id will be sent with $GET
    Public function selectPost(Article $idpost)
    {
        $sql = 'SELECT title, content, date_article, images.images
                FROM articles 
                LEFT JOIN images ON images.id = articles.id_image
                WHERE articles.id = ?';

       $result = $this->queryBdd($sql, array($idpost));

       if($result->rowCount()=== 1)
       {
           return $result->fetch();
       }
       else
           throw new Exception("Not found");
    }

    // Select all the posts for page "Blog"
    Public function selectAllPost()
    {
        //change the query to get the data using the article class instead of using the method in the controler
        $sql = $this->getBdd()->query('SELECT *, images.images 
                FROM articles 
                LEFT JOIN images ON images.id = articles.id_image 
                ORDER BY date_article DESC 
                LIMIT 0,10');

       while($result = $sql->fetch())
       {
           $r[]= new Article($result);

       }
       return $r;
        //$result = $this->queryBdd($sql);
    }

    //For Admin where the user will be allowed to delete a specific post based on the id with $GET
    Public function deletePost($idpost)
    {
        $sql = 'DELETE FROM articles WHERE id = ?';

        $result = $this->queryBdd($sql, array($idpost));
    }

    // For Admin where the user will be allowed to update a specific post based on the id with $GET
    Public function updatePost($idpost, $title, $content)
    {
        if(isset($title) && isset($content))
        {
            $sql = 'UPDATE articles SET title = ?, content = ?, date_article = NOW() WHERE id = ?';

            $result = $this->queryBdd($sql, array($idpost, $title, $content));
        }
        elseif(!isset($title) && isset($content))
        {
            $sql = 'UPDATE articles SET content = ?, date_article = NOW() WHERE id = ?';

                $result = $this->queryBdd($sql, array($idpost, $content));
        }
        elseif (isset($title) && !isset($content))
        {
            $sql = 'UPDATE articles SET title = ?, date_article = NOW() WHERE id = ?';

                $result = $this->queryBdd($sql, array($idpost, $title));
        }

        return $result;

    }

}