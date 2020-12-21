<?php
    class ResultController extends Controller {
        private $result;
        private $student;
        private $subject;

        function __construct(){
            $this->result = $this->Model("Result");
            $this->student = $this->Model("Student");
            $this->subject = $this->Model("Subject");
        }

        function create($maSV){
            $subjects = $this->subject->all();
            $student = $this->student->getByID($maSV);
            $data = [
                'student' => $student,
                'subjects' => $subjects,
            ];
            $this->View("results/create", $data);
        }
        function edit($maSV, $maMH, $namHoc, $hocKy){ 
            $student = $this->student->getByID($maSV);
            $subject = $this->subject->getByID($maMH);

            $data = [
                'subject' => $subject,
                'student' => $student,
                'namHoc'  => $namHoc,
                'hocKy'   => $hocKy,
            ];
            $this->View("results/edit", $data);
        }
        function store()
        {
            $result = $this->result->store($_POST);

            if($result === true){
                $_SESSION['alert']['success'] = true;
                $_SESSION['alert']['messages'] = "Tạo thành công";
            }else
            {
                $_SESSION['alert']['success'] = false;
                $_SESSION['alert']['messages'] = $result;
            }
            header('Location: /Student/detail/'. $_POST['maSV']);
            //
        }

        function update($maSV)
        {
            $result = $this->result->update($_POST);
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
            header("Location: /Student/detail/" . $_POST['maSV']);
        }

        function delete($maSV, $maMH, $namHoc, $hocKy)
        {
            $data = [
                'maSV'   => $maSV,
                'maMH'   => $maMH,
                'namHoc' => $namHoc,
                'hocKy'  => $hocKy,
            ];
            $result = $this->result->delete($data);

            if($result === true){
                $_SESSION['alert']['success'] = true;
                $_SESSION['alert']['messages'] = "Xóa thành công";
            }else
            {
                $_SESSION['alert']['success'] = false;
                $_SESSION['alert']['messages'] = $result;
            }   
            header('Location: /Student/detail/'. $maSV);
        }
    }

?>