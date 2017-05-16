<?php
include '../config.php';
$manager = new ArticleManager();
$m = $manager->selectAllPost();
include_once ROOT_VIEWS.'viewBlog.php';










    










