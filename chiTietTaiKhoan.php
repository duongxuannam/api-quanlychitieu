<?php
require 'dbCon.php';
require 'model/TaiKhoan.php';

$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$id = $obj['id'];

$qr = "SELECT * FROM taikhoan where ID = $id";
$ds = mysql_query($qr);
$mang = array();

while($row = mysql_fetch_array($ds)){
    array_push($mang, new TaiKhoan(
        $row['ID'], 
        $row['Email'], 
        // $row['MatKhau'], 
        $row['TenHienThi']
    ));  
}
echo json_encode($mang);


?>