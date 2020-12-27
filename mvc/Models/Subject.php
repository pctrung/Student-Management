<?php
    class Subject extends Database{
        function all(){
            $sql = "SELECT * FROM v_DanhSachMonHoc";
            
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
            $sql = "CALL sp_ThemMonHoc('{$data['maMH']}',"
            . "'{$data['maKhoa']}', '{$data['tenMH']}', '{$data['soTinChi']}'," 
            . "'{$data['soTietLT']}', '{$data['soTietTH']}')";
            $result = $this->db->query($sql);
            if(!$result){
                return $this->db->error;
            }
            return true;
        }
        function update($data)
        {
            $sql = "CALL sp_CapNhatMonHoc('{$data['maMH']}', '{$data['maMH']}',"
            . "'{$data['maKhoa']}', '{$data['tenMH']}', '{$data['soTinChi']}'," 
            . "'{$data['soTietLT']}', '{$data['soTietTH']}')";
            $result = $this->db->query($sql);
            if(!$result){
                return $this->db->error;
            }
            return true;
        }
        function getByID($maMH){
            $sql = "SELECT * FROM v_DanhSachMonHoc WHERE maMH = '{$maMH}'";
            
            $result = $this->db->query($sql);
            
            if(!$result){
                return $this->db->error;
            }

            if($result->num_rows > 0){
                return $result->fetch_assoc();
            }
            return 0;
        }
        function delete($maMH){     
            $sql = "DELETE FROM MONHOC WHERE maMH = $maMH";

            $result = $this->db->query($sql);

            if(!$result){
                return $this->db->error;
            }
            
            return true;
        }
    }

?>