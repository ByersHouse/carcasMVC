<?php
session_start();


define('ROOT', dirname(__FILE__));
require_once ROOT.'/components/Dbo.php';
require_once ROOT.'/components/Router.php';



$router = new Router();
$router->run();

$_REQUEST['db']='wow';


 

