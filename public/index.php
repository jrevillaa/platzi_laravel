<?php
/**
 * Created by PhpStorm.
 * User: jair
 * Date: 23/11/15
 * Time: 03:06 PM
 */
require_once __DIR__ . '/../vendor/autoload.php';
use \Illuminate\Http\Request;
use \PlatziPHP\Http\Controllers\HomeController;


$request = Request::capture();
$controller = new HomeController();

$controller->index($request);
//echo 'Hola mundo';