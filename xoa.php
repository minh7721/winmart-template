<?php
   $serverName = "DESKTOP-VIJT63S";
   $connectionInfo = array("Database" => "QuanLiSieuThi", 'CharacterSet' => 'UTF-8');
   $conn = sqlsrv_connect($serverName, $connectionInfo);
   $id = $_GET['id'];
   $sql = "DELETE FROM NhaCungCap where IDNCC = '$id'";
   $rs = sqlsrv_query($conn, $sql);
   if($rs){
       echo "Xóa thành công";
   }
   else{
        echo "Xóa thất bại";
    }

?>