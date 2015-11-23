<?php
/**
 * Created by PhpStorm.
 * User: jair
 * Date: 23/11/15
 * Time: 11:46 AM
 */

require_once 'vendor/autoload.php';

$user = new \PlatziPHP\Author('fake@mail.com','1234');
$user->setName('Jair','Revilla');

echo $user->getFirstName();
echo PHP_EOL;

//var_dump($user);