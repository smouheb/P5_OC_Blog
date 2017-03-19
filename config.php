<?php
$host = $_SERVER['DOCUMENT_ROOT'];
$rootmodel = __DIR__.'/model/';
$rootviews = __DIR__.'/views/';

define('HOST',$host);
define('ROOT_MODEL',$rootmodel);
define('ROOT_VIEWS',$rootviews);

function className($classname)
{
    if($rootmodel = true)
    {
        include ROOT_MODEL.$classname.'.php';

    }
    else
    {
        include ROOT_VIEWS.$classname.'.php';
    }
}
spl_autoload_register('className');


