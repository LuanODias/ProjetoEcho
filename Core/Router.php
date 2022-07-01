<?php

    namespace Core;
    
    class Router{

        private $controller = 'Site';
        private $method = 'home';
        private $param = [];
        public function __construct(){
            $router = $this->url();

           if(file_exists('App/Controllers/' . ucfirst($router[0]) . 'Controllers.php')):
               $this->controller = $router[0];
               unset($router[0]);
            endif;

           $class = "\\App\\Controllers\\" . ucfirst($this->controller)."Controllers";
           $object = new $class;
            

           if(isset($router[1]) and method_exists($class, $router[1])):
                $this->method = $router[1];
                unset($router[1]);
                endif;
           

           $this->param = $router ? array_values($router) : [];

           call_user_func_array([$object, $this->method], $this->param);
        }

        public function url(){
            $url = explode("/", filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL)); 
            return $url;
        }
    }
?>

