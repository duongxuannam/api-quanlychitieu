<?php
require 'dbCon.php';


$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$ghichu = $obj['ghichu'];
$tien = $obj['tien'];
$voiai = $obj['voiai'];
$ngay = $obj['ngay'];
$tenloaichi = $obj['tenloaichi'];
$idtaikhoan = $obj['idtaikhoan'];

$qr = "INSERT INTO chi VALUES(
    null,'$ngay',$tien  ,'$ghichu',$idtaikhoan,'$tenloaichi', '$voiai'
)";
//$ds = mysql_query($qr);
mysql_query($qr);
echo('them thành công')



?>