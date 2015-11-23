<?php
/**
 * Created by PhpStorm.
 * User: jair
 * Date: 23/11/15
 * Time: 03:14 PM
 */

namespace PlatziPHP\Http\Controllers;

use \Illuminate\Http\Request;
use PlatziPHP\Http\Views\View;

class HomeController{

    public function index(Request $request){
        // var_dump($request);
        $view = new View('home',['message' => 'hello from a View']);

        $response = $view->render();

        $response->send();

        //return 'Hello at ' . $request->getRequestUri() . ' from Controller';
    }

}