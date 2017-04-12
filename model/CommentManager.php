<?php
class CommentManager extends BddConfig
{
    // Insert new comments into the DB from Article's detailed page
    public function insertPost(Comments $commentForm)
    {
        $db = $this->getBdd();

        $sql = $db->prepare('INSERT INTO comments(comment, date_comment) 
                                                    VALUES (?,NOW())');
        $sql->execute(array($commentForm->getComment()));
        /*
         * copy entry de la table vers joint_a_comment, peut etre créer une autre method
         */
        $commentId = $db->query('SELECT LAST_INSERT_ID()')->fetchColumn();

        $articleId = $commentForm->getIdComment();

        $sql2 = $db->prepare('INSERT INTO joint_a_comments(id_comment,id_article) 
                                        VALUES (:commentId,:articleId)');

        $sql2->bindValue(':commentId', $commentId);
        $sql2->bindValue(':articleId', $articleId );

        $sql2->execute();
        /*
         * insert name into contact_names with the comment id
         */
        $firstname = $commentForm->getName();

        $sql3 = $db->prepare('INSERT INTO contact_names(first_name, id_comment) 
                                        VALUES(:first_name, :commentId)');

        $sql3->bindValue(':first_name', $firstname);
        $sql3->bindValue(':commentId', $commentId);
        $sql3->execute();

    }

    /*
     * Selection of all comments for the selected article
     * @return array
     */
    public function selectAllComment($idarticle)
    {
        $db = $this->getBdd();

        $sql = $db->prepare('SELECT c.comment, c.date_comment as date
                                          FROM comments as c 
                                          INNER JOIN joint_a_comments on joint_a_comments.id_comment = c.id
                                          INNER JOIN articles a ON joint_a_comments.id_article = a.id
                                          WHERE a.id = ?
                                          ORDER BY c.date_comment DESC 
                                          LIMIT 0,10');

        $sql->execute(array($idarticle));

        while($result =  $sql->fetch(PDO::FETCH_ASSOC))
        {
            $rescomment[] =  new Comments($result);
        }

        return $rescomment;

    }

    public function deleteComment($idpost)
    {
        $sql = 'DELETE FROM articles WHERE id = ?';

        $result = $this->queryBdd($sql, array($idpost));
    }
    /*
     * Merge insert and Update with conditions
     * For Admin where the user will be allowed to update a specific post based on the id with $GET
     */
    public function updateComment($idpost, $title, $content)
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