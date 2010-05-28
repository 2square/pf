<?php

require_once (LIBPATH.'/Controller.php');

class TodoController extends Controller {
    private $test="";
    public function addTodo() {
        $this->test = "1234";
        $this->render("Todo","addTodo");
    }
    function __get($name) {
        return $this->$name;
    }
    function __set($name, $value) {
        $this->$name = $value;        
    }
}

