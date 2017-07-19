<?php
class CommentManager extends BddConfig
{
    // Insert new comments into the DB from Article's detailed page
    public function insertPost(Comments $commentForm)
    {
        $db = $this->getBdd();

        $protectedinsert = $commentForm->getComment();

        $sql = $db->prepare('INSERT INTO comments(comment, date_comment) 
                                      VALUES (?,NOW())');
        $sql->execute(array($protectedinsert));
        /*
         * copy entry de la table vers joint_a_comment
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

        $sql = $db->prepare('SELECT c.comment, c.date_comment  date, c.id  idcomment, cn.first_name  name
                                          FROM comments as c 
                                          INNER JOIN joint_a_comments on joint_a_comments.id_comment = c.id
                                          INNER JOIN articles a ON joint_a_comments.id_article = a.id
                                          INNER JOIN contact_names cn ON cn.id_comment = c.id
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
    /*
     * @param int ID related to the comment to delete or edit
     */
    public function delComment($idcomment)
    {
        $db = $this->getBdd();

            $sql = $db->prepare( 'DELETE FROM comments 
                                            WHERE id = ?');
            $sql->execute(array($idcomment));
    }
    /*
     * @param int ID related to the comment to delete or edit
     * @param string related to the new comment to update
     */
    public function editComment($comment,$idcomment)
    {
        $db = $this->getBdd();

        $sql = $db->prepare( 'UPDATE comments 
                                        SET comment = ?, date_comment = NOW()
                                        WHERE id = ?');
        $sql->execute(array($comment,$idcomment));

    }
}