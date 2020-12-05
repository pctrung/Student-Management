<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "mysql";
	$databaseUse = "qldiem";

    $connection = new mysqli($dbhost, $dbuser, $dbpass, $databaseUse);

    if($connection->connect_error){
        die("Kết nối thất bại: " . $connection->connect_error);
    }

    echo "Kết nối thành công <br/>";

  
    $sql = "select * from khoa";

    $result = $connection->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_object()){
            echo "Ma khoa: " . $row->maKhoa . " - Ten khoa: " . $row->tenKhoa . "<br/>";
        }
    }
    else {
        echo "Khong co du lieu nao";
    }


    $connection->close();
?>
