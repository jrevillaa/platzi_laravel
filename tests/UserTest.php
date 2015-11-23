<?php
/**
 * Created by PhpStorm.
 * User: jair
 * Date: 23/11/15
 * Time: 12:16 PM
 */

class UserTest extends PHPUnit_Framework_TestCase{

    /** @test */
    function it_should_be_able_to_construct(){
        $user = new  \PlatziPHP\User('fake@email.com','platzi');

        $this->assertInstanceOf(\PlatziPHP\User::class,$user);
    }

    /** @test */
    function it_should_have_a_first_name(){
        $user = new  \PlatziPHP\User('fake@email.com','platzi');

        $user->setName('jair','revilla');

        $name = $user->getFirstName();

        $this->assertEquals('jair',$name);
    }
}