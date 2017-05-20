<?php
/**
 * @magic
 * Не трогай! It's Magic.
 * Включает всю эту сложную схему
 * @magic
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/template.php');
require_once(ROOT.'/views/layout/index.php');
require_once(ROOT.'/components/router.php');
require_once(ROOT.'/components/Db.php');
$router = new Router();
$router->run();
