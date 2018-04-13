<?php
mysql_connect('185.27.134.10', 'freev_21013656', 'namdaica');
mysql_select_db("freev_21013656_testmysql");
mysql_query( 'SET NAMES "utf8"');
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