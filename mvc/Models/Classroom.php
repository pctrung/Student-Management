<?php 
    class ClassRoom extends Database
    {
        function all()
        {
            $sql = "SELECT * FROM v_DanhSachLop";
            
            $result = $this->db->query($sql);

            if(!$result){
                return $this->db->error;
            }

            if($result->num_rows > 0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            return 0;
        }
    }
?>