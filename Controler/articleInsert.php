<?php
include '../config.php';
$value = $_POST['value'];
$narticle = new Articles($value, 1);
$title = $narticle->getTitle();
$content = $narticle->getContent();
$newarticle = new ArticleManager();
$newarticle->insertArticle($title, $content);
header('Location:articleSelect.php');
/*
 * Creer function pour les $values = $_POST['values'] -> Done
 * changer insert post -> Done
 * changer values dans html template -> done
 * checker si article hydrate bien avec le param clean -> Done
 * Checker les namespace
 */
