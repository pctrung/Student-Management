<?php
    class Teacher extends Database{
        function all(){
            $sql = "SELECT * FROM v_DanhSachCoVan";
            
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
            $sql = "CALL sp_ThemCoVan('{$data['maKhoa']}',"
            . "'{$data['tenCoVan']}', '{$data['gioiTinh']}', '{$data['soDienThoai']}', '{$data['email']}')";
            $result = $this->db->query($sql);
            if(!$result){
                return $this->db->error;
            }
            return true;
        }
        function update($data)
        {
            $sql = "CALL sp_CapNhatCoVan('{$data['maCoVan']}', '{$data['maCoVan']}', '{$data['maKhoa']}',"
            . "'{$data['tenCoVan']}', '{$data['gioiTinh']}', '{$data['soDienThoai']}', '{$data['email']}')";
            $result = $this->db->query($sql);
            if(!$result){
                return $this->db->error;
            }
            return true;
        }
        function getByCollege($maKhoa){
            $sql = "SELECT * FROM v_DanhSachCoVan WHERE maKhoa = '$maKhoa'";
            
            $result = $this->db->query($sql);

            if(!$result){
                return $this->db->error;
            }

            if($result->num_rows > 0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            return 0;
        }
        function getTotal(){
            $sql = "SELECT fn_SoLuongCoVan()";
            
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