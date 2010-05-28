<?php

class Controller {
    function __construct() {
        
    }
    public function render($path) {
        require_once(VIEWPATH.$path.".php");
    }
}