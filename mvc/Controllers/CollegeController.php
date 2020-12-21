<?php
    class CollegeController extends Controller {
        private $college;

        function __construct(){
            $this->college = $this->Model("College");
        }
        function index(){
            $colleges = $this->college->all();

            $data = [
                'colleges' => $colleges,
            ];

            // var_dump($data);
            // die();
            $this->View("colleges/index", $data);
        }
    }

?>