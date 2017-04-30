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
                                'SELECT title, content, date_article
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

    public function insertArticle($title, $content)
    {
        $db = $this->getBdd();

        $sql = $db->prepare('INSERT INTO articles (title, content, date_article)
                                       VALUES (?, ?, NOW())');

        $sql->execute(array($title, $content));

    }
}