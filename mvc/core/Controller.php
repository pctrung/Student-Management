<?php
    class Controller{
        function Model($model){
            require_once "./mvc/Models/".$model.".php";
            return new $model;
        }
        function View($view, $data = []){
            require_once "./mvc/Views/".$view.".php";
        }
    }

?>