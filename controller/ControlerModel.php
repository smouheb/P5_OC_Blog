<?php
include '../config.php';
include '../entities/Articles.php';
$manager = new ModelPost();
//include ROOT_MODEL.'modelPost.php';
    /*if(isset($_GET['id']))
    {
        $idpost = $_GET['id'];
        $articles = $manager->selectPost($idpost);
        include ROOT_VIEWS.'viewDetailpost.php';
    }
    else if($_GET['action']=='additem')
    {
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $articles = $manager->insertPost($title,$content);
        header('location:ControlerModel.php');
    }
    else
    {
        $articles = $manager->selectAllPost();
        include_once ROOT_VIEWS.'viewBlog.php';
    }*/
//A rajouter dans les views
//coder le controler Article

$m = $manager->selectAllPost();

foreach ($m as $r)
{
    echo "<div>".$r->getTitle()." ".$r->getContent()."</div>"."<br>";
}
/* je veux utiliser le getter pour recuperer les donnes de la bdd*/