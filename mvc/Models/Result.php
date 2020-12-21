<?php
    class Result extends Database{
        function all(){
            $sql = "SELECT * FROM v_DanhSachKetQua";
            
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
            $sql = "CALL sp_ThemKetQua('{$data['maSV']}',"
            . "'{$data['maMH']}', '{$data['hocKy']}', '{$data['namHoc']}'," 
            . "'{$data['diem']}')";
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
            $sql = "CALL sp_CapNhatKetQua({$data['maSV']}, '{$data['maMH']}',"
            . "{$data['hocKy']}, '{$data['namHoc']}', {$data['maSV']},"
            . "'{$data['maMH']}', {$data['hocKy']}, '{$data['namHoc']}',"
            . "{$data['diem']})";
            $result = $this->db->query($sql);
            if(!$result){
                return $this->db->error;
            }
            return true;
        }
        function delete($data){
            
            $sql = "CALL sp_XoaKetQua('{$data['maSV']}', '{$data['maMH']}', '{$data['hocKy']}','{$data['namHoc']}')";
            // var_dump($sql);
            // die();
            $result = $this->db->query($sql);

            if(!$result){
                return $this->db->error;
            }
            
            return true;
        }
        function getByID($maSV){
            $sql = "CALL sp_LayKetQuaTheoMaSV('$maSV')";

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