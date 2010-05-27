<?php

require_once (LIBPATH.'/Controller.php');

class TodoController extends Controller {
    private $test="";
    public function addTodo() {
        $this->test = "1234";
    }
}

