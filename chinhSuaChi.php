<?php
require 'dbCon.php';


$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$id = $obj['id'];
$ghichu = $obj['ghichu'];
$tien = $obj['tien'];
$voiai = $obj['voiai'];
$ngay = $obj['ngay'];
$tenloaichi = $obj['tenloaichi'];


$qr = "UPDATE chi 
        SET Ngay = '$ngay', Tien = $tien, GhiChu = '$ghichu', TenLoaiChi = '$tenloaichi', VoiAi = '$voiai'
        WHERE ID = $id
";
//$ds = mysql_query($qr);
mysql_query($qr);
echo('sửa thành công')



?>