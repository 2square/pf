<?php

class Template {
    private $controller;

    function __construct($controller) {
                
        $this->controller = $controller;
//        $objectVars = $controller;
        echo var_dump($objectVars)."<br />";
        foreach($objectVars as $name => $value) {
            $this->$name = $value;
        }
    }

    public function render($controllerName, $methodName) {
        require_once(VIEWPATH."/{$controllerName}/{$methodName}.php");
    }
/*
    function __get($name) {
        return $this->$name;
    }
    function __set($name, $value) {
        $this->$name = $value;
    }
    */
}

