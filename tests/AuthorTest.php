<?php
/**
 * Created by PhpStorm.
 * User: jair
 * Date: 23/11/15
 * Time: 12:26 PM
 */

class AuthorTest extends PHPUnit_Framework_TestCase{

    /** @test */
    function it_should_construct(){
        $author = new \PlatziPHP\Author('jair@atypax.com','platzi','AUTOR_DE_PLATZI');

        $this->assertInstanceOf(\PlatziPHP\Author::class,$author);
    }

    /** @test */
    function it_should_fail_when_no_key_is_given(){

        $this->setExpectedException(\InvalidArgumentException::class);

        $author = new \PlatziPHP\Author('jair@atypax.com','platzi','hola');

        $this->assertInstanceOf(\PlatziPHP\Author::class,$author);
    }
}