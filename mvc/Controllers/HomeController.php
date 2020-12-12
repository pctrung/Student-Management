<?php
    class HomeController extends Controller{
        function index($ten = "trung", $tuoi = 20){
            echo $ten . $tuoi;
        }
    }

?>