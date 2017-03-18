<?php
require_once 'modelConfig.php';
/**
 * Select, Create, update, delete Comments
 */
class ControlerComment extends ModelConfig
{
    Public function insertComment($comment)
    {
        $sql = 'INSERT INTO articles(comment, date_comment) VALUES (?,NOW())';

        $this->queryBdd($sql, array($comment));

    }

    Public function selectComment($idcomment)
    {
        $sql = 'SELECT comment, date_comment FROM comments WHERE id = ?';

        $result = $this->queryBdd($sql, array($idcomment));

        if($result->rowCount()=== 1)
        {
            return $result->fetch();
        }
        else
            throw new Exception("Nothing found with this: ".$idpost);
    }

    Public function selectAllComments()
    {
        $sql = 'SELECT * FROM comments  ORDER BY date_comment DESC LIMIT 0,10';

        $result = $this->queryBdd($sql);

        return $result;
    }

    Public function deleteComment($idcomment)
    {
        $sql = 'DELETE FROM comments WHERE id = ?';

        $result = $this->queryBdd($sql, array($idcomment));
    }

    Public function updateComments($idcomment, $comment)
    {
        if(isset($comment))
        {
            $sql = 'UPDATE comment SET comment = ?, date_comment = NOW() WHERE id = ?';

            $result = $this->queryBdd($sql, array($idcomment, $comment));

        }

        return $result;
    }

}