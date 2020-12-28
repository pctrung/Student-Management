<?php
    class Controller{
   
        private $route;

        function Model($model){
            require_once "./mvc/Models/".$model.".php";
            return new $model;
        }
        function View($view, $data = []){
            require_once "./mvc/Views/".$view.".php";
        }

        function currentRoute(){
            $url = explode("/", filter_var(trim($u = $_SERVER['REQUEST_URI'])));
            $this->route = $url[1];
            return $this->route;
        }
    }

?>