<?php
    class User extends Database{
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
            $sql = "CALL sp_ThemSV('{$data['maLop']}',"
            . "'{$data['tenSV']}', '{$data['gioiTinh']}', '{$data['diaChi']}'," 
            . "'{$data['email']}', '{$data['ngaySinh']}', '{$data['queQuan']}')";
            $result = $this->db->query($sql);
            if(!$result){
                return $this->db->error;
            }
            return true;
        }
        function update($data)
        {
            // var_dump($data);
            // die();
            $maSV = (int)$data['maSV'];
            $sql = "CALL sp_CapNhatSinhVien('{$maSV}', '{$maSV}','{$data['maLop']}',"
            . "'{$data['tenSV']}', '{$data['gioiTinh']}', '{$data['diaChi']}'," 
            . "'{$data['email']}', '{$data['ngaySinh']}', '{$data['queQuan']}')";
            $result = $this->db->query($sql);
            if(!$result){
                return $this->db->error;
            }
            return true;
        }
        
    }

?>