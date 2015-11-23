<?php
/**
 * Created by PhpStorm.
 * User: jair
 * Date: 23/11/15
 * Time: 03:31 PM
 */
namespace PlatziPHP\Http\Views;

use Illuminate\Http\Response;

class View{

    private $template;

    private $params;

    public function __construct($template, array $params = []){
        $this->template = $template;
        $this->params = $params;
    }

    /**
     * @return Response
     */
    public function render(){
        $content = $this->loadTemplate();

        $response = new Response($content);

        return $response;
    }

    private function loadTemplate(){
        $path = dirname(dirname(dirname(__DIR__))) . '/resources/Views';

        $templatePath = "$path/{$this->template}.php";

        return $this->includeTemplateFromFile($templatePath, $this->params);

    }

    /**
     * @param $path
     * @param $params
     * @return mixed
     */
    private function includeTemplateFromFile($path,$params){
        if(file_exists($path)){
            extract($params);
            return require $path;
        }
    }

}