<?php

class App {

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = array();
    public function __construct() {
        $url = $this -> parseUrl();
        //print_r($url);

        if ($url[0]) {

            if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                $this -> controller = $url[0];
                unset($url[0]);
            } else {
               header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
               //header("Location: /error/");
               $this -> controller = 'error';
            }
        }

        require_once '../app/controllers/' . $this -> controller . '.php';
        $this -> controller = new $this->controller;
        if (isset($url[1])) {
            if (method_exists($this -> controller, $url[1])) {
                $this -> method = $url[1];
                unset($url[1]);

            } 

        }

        $this -> params = $url ? array_values($url) : array();
        //print_r($this->params);
        call_user_func_array(array($this -> controller, $this -> method), $this -> params);

    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

}
