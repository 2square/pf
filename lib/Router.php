<?php

class Router {
    private $routes;
    private $baseUrl;
    
    function __construct($baseUrl) {
        $this->baseUrl = $baseUrl;
    }

    private function validateUrl($url) {
        $regexUrl = preg_quote($this->baseUrl, '/');
        $pattern = '/^'.$regexUrl.'\/(.*)$/';
        preg_match($pattern, $url, $match,PREG_OFFSET_CAPTURE);
        return $match[1][0];
    }

    private function callMethod($controllerName, $methodName) {

        require_once(CTRLPATH."/{$controllerName}.php");
        $controllerClassName = $controllerName.'Controller';
        $controller = new $controllerClassName();
        if(method_exists($controller, $methodName))
            $controller->$methodName();
        /*
        require_once(LIBPATH."/Template.php");
        $template = new Template($controller);
        $template->render($controllerName, $methodName);
        */
    }

    public function route($url) {

        $validUrl = $this->validateUrl($url);
        if($validUrl == NULL) echo "not valid Url error";// error();
        $urlArray = explode('/', $validUrl);
        
        $controllerName = $urlArray[0];
        array_shift($urlArray);
        $methodName = $urlArray[0];
        array_shift($urlArray);
        
        $this->callMethod($controllerName, $methodName);
    }
    
    function __get($name) {
        switch ($name) {
        case 'validUrl':
        }
        
        if(isset($name)) {
            return $this->$name;
        }
    }
    function __set($name, $value) {
        $this->$name = $value;
    }
}