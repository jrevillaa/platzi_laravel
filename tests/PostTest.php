<?php
/**
 * Created by PhpStorm.
 * User: jair
 * Date: 23/11/15
 * Time: 12:58 PM
 */

class PostTest extends PHPUnit_Framework_TestCase{

    /** @test */
    function it_gives_us_the_author_name(){
        $autor = new  \PlatziPHP\Author('email','1234', 'AUTOR_DE_PLATZI');

        $autor->setName('Jair','Revilla');
        $post = new \PlatziPHP\Post($autor,'a Title', 'A post body');

        $this->assertEquals('by Jair', $post->getAuthor());

    }
}