<?php
require 'dbCon.php';
require 'model/Chi.php';

$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$idTaiKhoan = $obj['id'];

$qr = "SELECT * FROM chi where IDTaiKhoan = $idTaiKhoan";
$ds = mysql_query($qr);
$mang = array();

while($row = mysql_fetch_array($ds)){
    array_push($mang, new Chi(
        $row['ID'], 
        $row['GhiChu'], 
        $row['Tien'], 
        $row['Ngay'],
        $row['IDTaiKhoan'],
        $row['TenLoaiChi']
    ));  
}
echo json_encode($mang);

?>