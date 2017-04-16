<?php
include '../config.php';
/*
 * instantiate the ArticleManager class to get the article selected by the user when pressing "More" in the list of article's screen
 * @param int Id of the relate article
 */
$manager = new ArticleManager();
$r = (int)$_GET['id'];
$details = $manager->selectPost($r);
/*
 * Instantiation of Comment's Class manager to get all comments related to an article using the ID
 * @param int - Id of the related article to get the comments accordingly
 */
$comments = new CommentManager();
$com = $comments->selectAllComment($r);

/*
 * Inclusion of related views
 */
include ROOT_VIEWS.'viewComment.php';
include ROOT_VIEWS.'viewDetailpost.php';
include ROOT_VIEWS.'_templateForm.php';

