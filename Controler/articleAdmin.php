<?php
include '../config.php';
$admin = new ArticleManager();
$r = $admin->selectAllPost();
include_once ROOT_VIEWS.'viewAdmin.php';