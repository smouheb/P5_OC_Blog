<?php
include '../config.php';
/*
 * Deletion or update of a comment
 */
$idarticle = $_GET['idarticle'];

$articles = new ArticleManager();

if(isset($_POST['delete']))
{
    $articles->delArticle($idarticle);
}
elseif(isset($_POST['update']))
{
    $content = $_POST['newarticle'];

    $articles->editComment($content,$idarticle);
}
header('Location:articleAdmin.php');