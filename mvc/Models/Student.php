<?php
    class Student extends Database{
        function all(){
            $sql = "SELECT * FROM v_DanhSachSinhVien";
            
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
            $sql = "CALL sp_CapNhatSV('{$data['maSV']}', '{$data['maSV']}','{$data['maLop']}',"
            . "'{$data['tenSV']}', '{$data['gioiTinh']}', '{$data['diaChi']}'," 
            . "'{$data['email']}', '{$data['ngaySinh']}', '{$data['queQuan']}')";
            $result = $this->db->query($sql);
            if(!$result){
                return $this->db->error;
            }
            return true;
        }
        function getByClass($maLop){
            $sql = "CALL sp_LaySVTheoLop('$maLop')";
            
            $result = $this->db->query($sql);

            if(!$result){
                return $this->db->error;
            }

            if($result->num_rows > 0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            return 0;
        }
        function getByCollege($maKhoa){
            $sql = "CALL sp_LaySVTheoKhoa('$maKhoa')";
            
            $result = $this->db->query($sql);

            if(!$result){
                return $this->db->error;
            }

            if($result->num_rows > 0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            return 0;
        }
        function getByID($maSV){
            $sql = "SELECT * FROM v_DanhSachSinhVien WHERE maSV = $maSV";
            
            $result = $this->db->query($sql);

            if(!$result){
                return $this->db->error;
            }

            if($result->num_rows > 0){
                return $result->fetch_assoc();
            }
            return 0;
        }
        function delete(){
            
        }
    }

?>