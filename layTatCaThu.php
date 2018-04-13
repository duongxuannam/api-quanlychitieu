<?php
require 'dbCon.php';
require 'model/Thu.php';

$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$idTaiKhoan = $obj['id'];

$qr = "SELECT * FROM thu where IDTaiKhoan = $idTaiKhoan";
$ds = mysql_query($qr);
$mang = array();

while($row = mysql_fetch_array($ds)){
    array_push($mang, new Thu(
        $row['ID'], 
        $row['GhiChu'], 
        $row['Tien'], 
        $row['Ngay'],
        $row['IDTaiKhoan'],
        $row['TenLoaiThu']
    ));  
}
echo json_encode($mang);

?>