<?php

class Template {
    private $controller;

    function __construct($controller) {
                
        $this->controller = $controller;
//        $objectVars = $controller;
        $arr =  (array)$controller;
        foreach ($arr as $name => $value) {
            echo $name.' '.$value.'<br />';
        }

        /*
        foreach($objectVars as $name => $value) {
            $this->$name = $value;
        }
        */
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

