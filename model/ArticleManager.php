<?php
/**
 * Class to select blog's post and also the detail view of the post showing the comments
 * Added a method to insert Articles in the admin page
 */
class ArticleManager extends BddConfig
{

    //This is to select a specific post based on a click on the link where the id will be sent with $GET
    Public function selectPost($idpost)
    {
        $sql = $this->getBdd()->prepare(
                                'SELECT title, content, date_article, chapo
                                            FROM articles
                                            WHERE id = ?');

       $sql->execute(array($idpost));

       $result = $sql->fetch();

       $r[] = new Articles($result);

       return $r;
    }

    Public function selectAllPost()
    {
        /*
         * change the query to get the data using the article class instead of using the method in the controler
         * added joint query for user name as it is in a separate table
         */
        $sql = $this->getBdd()->query(
                            'SELECT *,date_article date, articles.id, users.user_name name
                                        FROM articles
                                        INNER JOIN users ON users.id = articles.id_user
                                        ORDER BY date_article DESC 
                                        LIMIT 0,10');

       while($result = $sql->fetch())
       {

           $r[]= new Articles($result);

       }
       return $r;
    }

    public function insertArticle($name, $title, $content, $chapo)
    {
        if (!empty($name)&& !empty($title)&& !empty($content)&& !empty($chapo)){

            $db = $this->getBdd();

            $sql2 = $db->prepare('INSERT INTO users(user_name, date_entry) VALUES (?, now())');

            $sql2->execute(array($name));

            $commentId = $db->query('SELECT LAST_INSERT_ID()')->fetchColumn();

            $sql = $db->prepare('INSERT INTO articles (title, content, date_article, id_user, chapo)
                                       VALUES (?, ?,NOW(), ?, ?)');

            $sql->execute(array($title, $content, $commentId, $chapo));

        }else{
                header('location:../404.php');
        }


    }
    /*
     * @param int ID related to the comment to delete or edit
     */
    public function delArticle($idarticle)
    {
        $db = $this->getBdd();

        $sql = $db->prepare( 'DELETE FROM articles 
                                            WHERE id = ?');
        $sql->execute(array($idarticle));
    }
    /*
     * @param int ID related to the comment to delete or edit
     * @param string related to the new comment to update
     */
    public function edit($title, $content, $idarticle, $chapo)
    {

        if(!empty($title)&& !empty($content)&& !empty($idarticle)&& !empty($chapo)) {

            $db = $this->getBdd();

            $sql = $db->prepare('UPDATE articles 
                                    SET title = ?, content = ?, date_article = NOW(), chapo = ?
                                    WHERE id = ?');

            $sql->execute(array($title, $content, $chapo, $idarticle));

        } else{

        header('location:../../404.php');

        }

    }
}