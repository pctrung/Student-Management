<?php
    class ClassroomController extends Controller {
        private $classroom;

        function __construct(){
            $this->classroom = $this->Model("Classroom");
        }
        function index(){
            $classrooms = $this->classroom->all();

            $data = [
                'classrooms' => $classrooms,
            ];

            //var_dump($data);
            $this->View("classrooms/index", $data);
        }
    }

?>