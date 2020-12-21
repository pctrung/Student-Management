<?php
    class College extends Database{
        function all(){
            $sql = "SELECT * FROM v_DanhSachKhoa";
            
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
            $sql = "CALL sp_ThemKhoa('{$data['maKhoa']}', '{$data['tenKhoa']}')";
            $result = $this->db->query($sql);
            if(!$result){
                return $this->db->error;
            }
            return true;
        }
        function update($data)
        {
            $sql = "CALL sp_CapNhatKhoa('{$data['maKhoa']}', '{$data['maKhoa']}', '{$data['tenKhoa']}')";
            $result = $this->db->query($sql);
            if(!$result){
                return $this->db->error;
            }
            return true;
        }
        function getTotal(){
            $sql = "SELECT fn_SoLuongKhoa()";
            
            $result = $this->db->query($sql);

            if(!$result){
                return $this->db->error;
            }

            if($result->num_rows > 0){
                return $result->fetch_array();
            }
            return 0;
        }
    }

?>