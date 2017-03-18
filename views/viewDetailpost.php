<?php
$idpost = $_GET['title'];
include_once '../modelPost.php';
$result = new ControlerPost();
$article = $result->selectPost($idpost);

var_dump($article);
?>