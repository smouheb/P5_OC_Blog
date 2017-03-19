<?php
include '../config.php';
$manager = new ModelPost();
//include ROOT_MODEL.'modelPost.php';
    if(isset($_GET['title']))
    {
        $idpost = $_GET['title'];
        $articles = $manager->selectPost($idpost);
        include ROOT_VIEWS.'viewDetailpost.php';
    }
    else
    {
        $articles = $manager->selectAllPost();
        include_once ROOT_VIEWS.'viewBlog.php';
    }
