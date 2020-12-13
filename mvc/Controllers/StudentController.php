<?php
    class StudentController extends Controller {
        private $student;
        private $classroom;
        private $score;

        function __construct(){
            $this->student = $this->Model("Student");
            $this->classroom = $this->Model("Classroom");
        }
        function index(){
            $students = $this->student->all();
            $data = [
                'students' => $students,
            ];

            //var_dump($data);
            $this->View("students/index", $data);
        }
        function create(){
            $classrooms = $this->classroom->all();
            $data = [
                'classrooms' => $classrooms,
            ];
            $this->View("students/create", $data);
        }
        function edit($maSV){
            $classrooms = $this->classroom->all();
            $student = $this->student->getByID($maSV);

            $data = [
                'classrooms' => $classrooms,
                'student' => $student
            ];
            $this->View("students/edit", $data);
        }
        function detail($maSV){
            $student = $this->student->getByID($maSV);
            $scores = $this->student->getScoreByID($maSV);

            $data = [
                'student' => $student,
                'scores' => $scores
            ];

            $this->View("students/detail", $data);
        }
        function store()
        {
            $student = $this->student->store($_POST);
            // var_dump( ($student == true));
            // die();
            if($student === true){
                $_SESSION['alert']['success'] = true;
                $_SESSION['alert']['messages'] = "Tạo thành công";
            }else
            {
                $_SESSION['alert']['success'] = false;
                $_SESSION['alert']['messages'] = $student;
            }
            header('Location: /Student/create');
            //
        }

        function update($maSV)
        {
            $result = $this->student->update($_POST);
            // var_dump( ($student == true));
            // die();
            if($result === true){
                $_SESSION['alert']['success'] = true;
                $_SESSION['alert']['messages'] = "Cập nhật thành công";
            }else
            {
                $_SESSION['alert']['success'] = false;
                $_SESSION['alert']['messages'] = $result;
            }
            header("Location: /Student/edit/" . $maSV);
            //var_dump($_POST);
        }

        function delete($maSV)
        {
            $student = $this->student->delete($maSV);
            // var_dump( ($student == true));
            // die();
            if($student === true){
                $_SESSION['alert']['success'] = true;
                $_SESSION['alert']['messages'] = "Cập nhật thành công";
            }else
            {
                $_SESSION['alert']['success'] = false;
                $_SESSION['alert']['messages'] = $student;
            }
            header("Location: /Student/index");
            //var_dump($_POST);
        }
    }

?>