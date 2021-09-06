<?php

ini_set('display_errors','on');
error_reporting(E_ALL);

$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];


define('HOST','http://'.$host.'/Final');
define('ROOT',$root.'/Final');


define('CONTROLLER',ROOT.'Controller/');
define('VIEW',ROOT.'View/');
define('MODEL',ROOT.'Model/');
define('CLASSES',ROOT.'Classes/');

define('ASSETS',HOST.'assets/');