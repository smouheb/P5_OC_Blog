<?php
include '../config.php';
/*
 * instantiate the ArticleManager class to get the article selected by the user when pressing "More" in the list of article's screen
 * @param int Id of the relate article
 */
$manager = new ArticleManager();
$r = (int)$_GET['id'];
$details = $manager->selectPost($r);

$comments = new CommentManager();
$com = $comments->selectAllComment($r);
/*
 * Inclusion of related views
 */
include ROOT_VIEWS.'viewComment.php';
include ROOT_VIEWS.'viewDetailpost.php';
include ROOT_VIEWS.'_templateForm.php';
