<?php
include '../config.php';
$id = $_GET['id'];
$value = $_POST['value'];
$commentForm = new Comments($value, 1);
$commentForm->setIdComment($id);
$manager = new CommentManager();
$manager->insertPost($commentForm);
header('Location:articleSelect.php');
/*
 * Creer function pour les $values = $_POST['values'] -> Done
 * changer insert post -> Done
 * changer values dans html template -> done
 * checker si article hydrate bien avec le param clean -> Done
 * Checker les namespace
 */
