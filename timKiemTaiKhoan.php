<?php
require 'dbCon.php';
require 'model/TaiKhoan.php';


$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$tukhoa = $obj['tukhoa'];



$qr = "SELECT * FROM taikhoan WHERE Email Like '%$tukhoa%'";
$result = mysql_query($qr);

$mang = array();

while($row = mysql_fetch_array($result)){
    array_push($mang, new TaiKhoan(
        $row['ID'], 
        $row['Email'], 
        $row['MatKhau'], 
        $row['TenHienThi']
    ));  
}
echo json_encode($mang);

?>




