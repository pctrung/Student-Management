<?php
    class SubjectController extends Controller {
        private $subject;
        private $college;

        function __construct(){
            $this->subject = $this->Model("Subject");
            $this->college = $this->Model("College");
        }
        function index(){
            $subjects = $this->subject->all();

            $data = [
                'subjects' => $subjects,
            ];

            //var_dump($data);
            $this->View("subjects/index", $data);
        }
                
        function create(){
            $colleges = $this->college->all();
            $data = [
                'colleges' => $colleges,
            ];
            $this->View("subjects/create", $data);
        }
        function store()
        {
            $result = $this->subject->store($_POST);
            // var_dump( $result );
            // die();
            if($result === true){
                $_SESSION['alert']['success'] = true;
                $_SESSION['alert']['messages'] = "Tạo thành công";
            }else if(result === false)
            {
                $_SESSION['alert']['success'] = false;
                $_SESSION['alert']['messages'] = $result;
            }
            header('Location: /Subject/create');
        }

        function edit($maMH){
            $subject = $this->subject->getByID($maMH);
            $colleges = $this->college->all();
    
            $data = [
                'subject'     => $subject,
                'colleges' => $colleges
            ];
            $this->View("subjects/edit", $data);
        }
        function update($maMH)
        {
            $result = $this->subject->update($_POST);
            // var_dump( ($subject == true));
            // die();
            if($result === true){
                $_SESSION['alert']['success'] = true;
                $_SESSION['alert']['messages'] = "Cập nhật thành công";
            }else
            {
                $_SESSION['alert']['success'] = false;
                $_SESSION['alert']['messages'] = $result;
            }
            header("Location: /Subject/edit/" . $maMH);
        }
    
        function delete($maMH)
        {
            $result = $this->subject->delete($maMH);
    
            if($result === true){
                $_SESSION['alert']['success'] = true;
                $_SESSION['alert']['messages'] = "Xóa thành công";
            }else
            {
                $_SESSION['alert']['success'] = false;
                $_SESSION['alert']['messages'] = $result;
            }   
            header("Location: /Subject/index");
        }
    }
?>