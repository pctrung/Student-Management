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
        function create(){
            
            $this->View("classrooms/create");
        }
        function store()
        {
            $classroom = $this->classroom->store($_POST);
            // var_dump( ($student == true));
            // die();
            if($student === true){
                $_SESSION['alert']['success'] = true;
                $_SESSION['alert']['messages'] = "Tạo thành công";
            }else
            {
                $_SESSION['alert']['success'] = false;
                $_SESSION['alert']['messages'] = $classroom;
            }
            header('Location: /Classroom/create');
            //
        }
    }

?>