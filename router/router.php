<?php

class router {
    public $router = [];
    public $controller;
    public function __construct()
    {
        $this->controller = new controller();
    }



    public function get($uri,$action){
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
            'middleware' => null
        ];
        return $this;
    }

    public function post($uri,$action){
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST',
            'middleware' => null
        ];
        return $this;
    }

    public function delete($uri,$action){
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'DELETE',
            'middleware' => null
        ];
        return $this;
    }

    public function patch($uri,$action){
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'PATCH',
            'middleware' => null
        ];
        return $this;
    }



    public function routing(){

        foreach ($this->router as $route) {
            if($route['uri'] === $_SERVER['REQUEST_URI']){

                if($route['action']){
                    switch ($route['action']){

                        case 'createDb':
                            $this->controller->create_Db($_POST);
                            break;
                            case 'table':
                                $this->controller->showTable();
                                break;
                            case 'insertTable':
                               
                                $this->controller->createTable($_POST)   ; 

                        default :
                            $this->controller->HomePage();

                    }
                }else{

                    $this->controller->Homepage();
                }

            }
        }
        exit();
    }
}