<?php
/**
 * Created by PhpStorm.
 * User: jair
 * Date: 23/11/15
 * Time: 02:25 PM
 */

class EmailTest extends PHPUnit_Framework_TestCase{

    function test_email_is_valid(){
        $email = new \PlatziPHP\Email('fake@example.dev');

        $this->assertInstanceOf(\PlatziPHP\Email::class,$email);
    }

    function test_email_is_invalid(){
        $this->setExpectedException(\InvalidArgumentException::class);

        $email = new \PlatziPHP\Email('esto no es un mail');

        $this->assertInstanceOf(\PlatziPHP\Email::class,$email);
    }

}