<?php
include '../config.php';
include ROOT_MODEL.'modelPost.php';
$manager = new ModelPost();
$articles = $manager->selectAllPost();
include_once ROOT_VIEWS.'viewBlog.php';
