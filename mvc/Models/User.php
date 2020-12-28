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

        function login($username, $password)
        {
            $sql = "SELECT * FROM USERS WHERE username = '$username' AND password = '$password'";
            
            $result = $this->db->query($sql);

            if($result->num_rows == 0){
                $results = [
                    'isSuccess' => false,
                    'messages'  => 'Sai tài khoản hoặc mật khẩu',
                    'errors'     => $this->db->error,
                ];
                return $results;
            }
            else if($result->num_rows > 0){
                $results = [
                    'isSuccess' => true,
                    'messages'  => 'Đăng nhập thành công'
                ];
                return $results;
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