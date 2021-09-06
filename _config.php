<?php

ini_set('display_errors','on');
error_reporting(E_ALL);

$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];


define('HOST','http://'.$host.'/MMG/MMG_WebSite/');
define('ROOT',$root.'/MMG/MMG_WebSite/');


define('CONTROLLER',ROOT.'Controller/');
define('VIEW',ROOT.'View/');
define('MODEL',ROOT.'Model/');
define('CLASSES',ROOT.'Classes/');

define('ASSETS',HOST.'assets/');
define('SOCK',HOST.'sockets/node_modules/socket.io/client-dist/');