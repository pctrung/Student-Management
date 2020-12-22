<?php

    session_start();
    require_once("./mvc/Bridge.php");

    $myApp = new App();

    // echo $myApp->route
//     $dbhost = "103.124.94.177";
//     $dbuser = "trungph091_vrb";
//     $dbpass = "QgMbPUYht@0CTvq9KG";
//     $databaseUse = "vrb_trungph091";

//     $db = new mysqli($dbhost, $dbuser, $dbpass, $databaseUse);

//     if($db->connect_error){
//         die("Kết nối thất bại: " . $db->connect_error);
//     }

//     $sql = "call sp_LaySVTheoKhoa('di')";
    
//     $result = $db->query($sql);

//     if(!$result){
//         echo("Error description: " . $db -> error);
//     }

//     print_r($result->fetch_array());
//     if($result->num_rows > 0){
        
//     }
//     else {
//         echo "Khong co du lieu nao";
//     }


//    $db->close();
?>
