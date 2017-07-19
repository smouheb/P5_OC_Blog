<?php
$narticle = new Articles($value, 1);
$title = $narticle->getTitle();
$content = $narticle->getContent();
$name = $narticle->getName();
$newarticle = new ArticleManager();
$newarticle->insertArticle($name, $title, $content);
//header('Location:articleSelect.php');

