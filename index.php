<?php
include 'config.php';
include 'app/Routeur.php';
//Data retrieved from "post", to edit the article from the admin page
$content = $_POST['newarticle'];

//Data retrieved from "post", for article insertion
$value = $_POST['value'];

//Parse url sent by the client
$path_info = $_SERVER['PATH_INFO'];

//Instantiating class routeur to get the related controllers
$routingBlog = new Routeur($path_info);
$routingBlog->routing($value);

