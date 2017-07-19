<?php
$host = $_SERVER['DOCUMENT_ROOT'];
$rootmodel = __DIR__.'/model/';
$rootviews = __DIR__.'/views/';
$routerpath = '/index.php/';
$rootentities = __DIR__.'/entities/';
$basepath = __DIR__.'/app/';

define('HOST',$host);
define('ROOT_MODEL',$rootmodel);
define('ROOT_VIEWS',$rootviews);
define('ROOT_ENTITIES',$rootentities);
define('ROOT_CONTROLLERS',$basepath);
define('ROUTER', $routerpath);

function className($classname)
{
    include ROOT_MODEL.$classname.'.php';
    include ROOT_VIEWS.$classname.'.php';
    include ROOT_ENTITIES.$classname.'.php';
    include ROOT_CONTROLLERS.$classname.'.php';

}
spl_autoload_register('className');


