<?php
/**
 * Created by PhpStorm.
 * User: jair
 * Date: 23/11/15
 * Time: 11:38 AM
 */
namespace PlatziPHP;


class User{
    /**
     * @type string
     */
    protected $mail;

    /**
     * @type string
     */
    protected $password;

    /**
     * @type string
     */
    protected $firstName;

    /**
     * @type string
     */
    protected $lastName;

    public function __construct($anEmail,$password){
        $this->mail = $anEmail;
        $this->password = password_hash($password,PASSWORD_DEFAULT);
    }

    /**
     * @param string $first
     * @param string $last
     */
    public function setName($first,$last){
        $this->firstName = $first;
        $this->lastName = $last;
    }

    /**
     * @return string
     */
    public function getFirstName(){
        return $this->firstName;
    }
}
