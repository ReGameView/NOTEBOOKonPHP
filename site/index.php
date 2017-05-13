<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/router.php');
require_once(ROOT.'/components/Db.php');
require_once(ROOT.'/components/Fc.php');
$router = new Router();
$router->run();
