<?php
include '../config.php';
/*
 * instantiate the Post class to get the article selected by the user when pressing "More" in the list of article's screen
 */
$manager = new Post();
$r = (int)$_GET['id'];
$details = $manager->selectPost($r);
/*
 * Instantiate the comment manager to get the data from the db to display them on the article screen
 */
$comments = new CommentManager();
$comments->selectAllComment($r);
/*
 * Inclusion of related views
 */
include ROOT_VIEWS.'viewDetailpost.php';
include ROOT_VIEWS.'viewComment.php';
