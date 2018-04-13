<?php
require 'dbCon.php';
require 'model/ThongKe.php';

$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$id = $obj['id'];
$ngay = $obj['ngay'];

$qr = "CALL thongke($id, '$ngay');";
$ds = mysql_query($qr);



if(mysql_num_rows($ds) == 1){
    $u = mysql_fetch_array($ds);
    $mang = array();
    $mang["tongsoluotthu"] = $u["tongsoluotthu"];
        $mang['tongsoluotchi']= $u["tongsoluotchi"];
        $mang['tongsoluot']= $u["tongsoluot"];
        $mang['tongsotienthu']= $u["tongsotienthu"];
        $mang['tongsotienchi']= $u["tongsotienchi"];
        $mang['thulonnhat']= $u["thulonnhat"];
        $mang['chilonnhat']= $u["chilonnhat"];
        $mang['thuhomnay']= $u["thuhomnay"];
        $mang['chihomnay']= $u["chihomnay"];
        $mang['soluotthuhomnay']= $u["soluotthuhomnay"];
        $mang['soluotchihomnay']= $u["soluotchihomnay"];

    echo json_encode($mang);
}else{
    echo "{'Loi':'Tài khoản hoặc mật khẩu không đúng'}";
}
?>





