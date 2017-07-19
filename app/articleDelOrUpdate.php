<?php
/*
 * Deletion or update of a comment
 */
$articles = new ArticleManager();

if($argument == 'delete')
{
    $articles->delArticle($idrequest);
}
elseif($argument == 'update')
{

    $articles->editComment($content,$idrequest);
}