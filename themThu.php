<?php
require 'dbCon.php';


$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$ghichu = $obj['ghichu'];
$tien = $obj['tien'];
$voiai = $obj['voiai'];
$ngay = $obj['ngay'];
$tenloaithu = $obj['tenloaithu'];
$idtaikhoan = $obj['idtaikhoan'];

$qr = "INSERT INTO thu VALUES(
    null, '$ghichu',$tien,'$ngay',$idtaikhoan, '$tenloaithu', '$voiai'
)";
//$ds = mysql_query($qr);
mysql_query($qr);
echo('them thành công')



?>