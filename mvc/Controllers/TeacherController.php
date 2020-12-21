<?php
    class TeacherController extends Controller {
        private $teacher;

        function __construct(){
            $this->teacher = $this->Model("Teacher");
        }
        function index(){
            $teachers = $this->teacher->all();

            $data = [
                'teachers' => $teachers,
            ];

            //var_dump($data);
            $this->View("teachers/index", $data);
        }
    }

?>