<?php
include '../config.php';
$manager = new Post();
$m = $manager->selectAllPost();
include_once ROOT_VIEWS.'viewBlog.php';












    










