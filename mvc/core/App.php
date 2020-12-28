<?php
    class App{
        protected $controller = "Login";
        protected $action = "index";
        protected $params = [];

        function __construct(){   
            if(isset($_SESSION['username'])){
                $this->controller = "Home";
            }
            
            $arr = $this->UrlProcess();
            
            if(file_exists("./mvc/Controllers/". $arr[0] . "Controller.php")){
                $this->controller = $arr[0];
                unset($arr[0]);
            }
            $this->route = $this->controller;
            $this->controller = $this->controller . "Controller";
            
            require_once "./mvc/Controllers/". $this->controller . ".php";
            $this->controller = new $this->controller;

            if(isset($arr[1])){
                if(method_exists($this->controller, $arr[1])){
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }

            $this->params = $arr ? array_values($arr) : [];

            if(!isset($_POST['btn_login']) && !isset($_SESSION['username'])){
                if ($this->Controller != "LoginController") {
                    require_once "./mvc/Controllers/LoginController.php";
                    $this->controller = new LoginController;
    
                    $this->action = "index";
                }
            }

            call_user_func_array([$this->controller, $this->action], $this->params);
            
        }
        
        function UrlProcess(){
            if(isset($_GET["url"])){
                return explode("/", filter_var(trim($u = $_GET["url"])));
            }
        }
    }

?>