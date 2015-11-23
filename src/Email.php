<?php
/**
 * Created by PhpStorm.
 * User: jair
 * Date: 23/11/15
 * Time: 02:22 PM
 */
namespace PlatziPHP;

class Email{

    private $address;

    public function __construct($add){
        if(filter_var($add,FILTER_VALIDATE_EMAIL)){
            $this->address = $add;
        }else{
            throw new \InvalidArgumentException('Email inválido: [$add]');
        }
    }

    public function getAddress(){
        return $this->address;
    }

}