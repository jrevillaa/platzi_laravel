<?php
/**
 * Created by PhpStorm.
 * User: jair
 * Date: 23/11/15
 * Time: 11:38 AM
 */
namespace PlatziPHP;


class User{
    private $mail;
    private $password;
    private $firstName;
    private $lastName;

    public function __construct($anEmail,$password){
        $this->mail = $anEmail;
        $this->password = password_hash($password,PASSWORD_DEFAULT);
    }

    public function setName($first,$last){
        $this->firstName = $first;
        $this->lastName = $last;
    }

    public function getFirtName(){
        return $this->firstName;
    }
}
