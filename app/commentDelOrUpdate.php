<?php
/*
 * Deletion or update of a comment
 */
$id = (int)$_GET['id'];
$idcomment = (int)$_GET['idcomment'];
$comments = new CommentManager();

if(isset($_POST['delete']))
{
    $comments->delComment($idcomment);
}
elseif(isset($_POST['update']))
{
    $comment = $_POST['newcomment'];

    $comments->editComment($comment,$idcomment);
}
header('Location:articleDetails.php?id='.$id);