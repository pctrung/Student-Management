<?php
    class Database{
        public $db;
        protected $dbhost = "103.124.94.177";
        protected $dbuser = "trungph091_vrb";
        protected $dbpass = "QgMbPUYht@0CTvq9KG";
        protected $databaseUse = "vrb_trungph091";
        
        function __construct(){
            $this->db= new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->databaseUse);

            if($this->db->connect_error){
                die("Kết nối thất bại: " . $this->db->connect_error);
            }
            $this->db->set_charset("utf8");
        }
    }

?>