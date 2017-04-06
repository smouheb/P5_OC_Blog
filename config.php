<?php
$host = $_SERVER['DOCUMENT_ROOT'];
$rootmodel = __DIR__.'/model/';
$rootviews = __DIR__.'/views/';
$rootentities = __DIR__.'/entities/';

define('HOST',$host);
define('ROOT_MODEL',$rootmodel);
define('ROOT_VIEWS',$rootviews);
define('ROOT_ENTITIES',$rootentities);

function className($classname)
{
    include ROOT_MODEL.$classname.'.php';
    include ROOT_VIEWS.$classname.'.php';
    include ROOT_ENTITIES.$classname.'.php';

}
spl_autoload_register('className');


