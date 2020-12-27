<?php
    class User extends Database{
        private $user;
        function all(){
            $sql = "SELECT * FROM USER";
            
            $result = $this->db->query($sql);

            if(!$result){
                return $this->db->error;
            }

            if($result->num_rows > 0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            return 0;
        }
        function store($data)
        {
            
        }
        function update($data)
        {

        }
        
    }

?>