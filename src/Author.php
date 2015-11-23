<?php
/**
 * Created by PhpStorm.
 * User: jair
 * Date: 23/11/15
 * Time: 11:56 AM
 */
namespace PlatziPHP;


class Author extends User{

    public function __construct($email,$password,$key){
        parent::__construct($email,$password);

        if($key != 'AUTOR_DE_PLATZI'){
            throw new \InvalidArgumentException('Invalid key given.');
        }
    }

    public function getLastName(){
        return $this->lastName;
    }

}