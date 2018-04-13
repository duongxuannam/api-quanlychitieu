<?php
require("dbCon.php");
require 'model/ChiaSe.php';

$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$id = $obj['id'];


$qr = " SELECT chiase.ID, chiase.IDChiaSe, taikhoan.TenHienThi, taikhoan.Email FROM chiase, taikhoan where chiase.IDDuocChiaSe=$id and chiase.IDChiaSe=taikhoan.ID ";

$ds = mysql_query($qr);


$mang = array();
while($row = mysql_fetch_array($ds)){
    array_push($mang, new ChiaSe(
        $row['ID'], 
        $row['IDChiaSe'], 
        $row['TenHienThi'],
        $row['Email']
    ));  
}
echo json_encode($mang);
?>