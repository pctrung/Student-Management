<?php
    class HomeController extends Controller{
        private $college;
        private $classroom;
        private $teacher;
        private $student;
        
        function __construct(){
            $this->college = $this->Model("College");
            $this->classroom = $this->Model("Classroom");
            $this->teacher = $this->Model("Teacher");
            $this->student = $this->Model("Student");
        }
        function index(){
            
            $totalStudents = ($this->student->getTotal())[0];
            $totalTeachers = ($this->teacher->getTotal())[0];
            $totalClassrooms = ($this->classroom->getTotal())[0];
            $totalColleges = ($this->college->getTotal())[0];

            $data = [
                'totalStudents' => $totalStudents,
                'totalTeachers' => $totalTeachers,
                'totalClassrooms' => $totalClassrooms,
                'totalColleges' => $totalColleges,
            ];
            // var_dump($data);
            // die();
            $this->View("home/index", $data);
        }
    }

?>