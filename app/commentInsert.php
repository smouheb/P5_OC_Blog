<?php
$id = $_GET['id'];
$value = $_POST['value'];
$commentForm = new Comments($value, 1);
$commentForm->setIdComment($id);
$manager = new CommentManager();
$manager->insertPost($commentForm);
header('Location:articleDetails.php?id='.$id);


