<?php
require 'dbCon.php';
require 'model/TaiKhoan.php';

$qr = "SELECT * FROM taikhoan";
$ds = mysql_query($qr);
$mang = array();//khai baso mang trong php
while($row = mysql_fetch_array($ds)){
    array_push($mang, new TaiKhoan(
        $row['ID'], 
        $row['Email'], 
        $row['MatKhau'], 
        $row['TenHienThi']
    ));  
}
echo json_encode($mang);
?>