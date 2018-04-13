<?php
require("dbCon.php");

$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$id = $obj['id'];


$qr = " SELECT * FROM taikhoan where ID=$id";

$user = mysql_query($qr);
if(mysql_num_rows($user) == 1){
    $u = mysql_fetch_array($user);
    $mang = array();
    $mang["ID"] = $u["ID"];
    $mang["Email"] = $u["Email"];
    $mang["TenHienThi"] = $u["TenHienThi"];

    echo json_encode($mang);
}else{
    echo "{'Loi':'ếu có đâu con'}";
}
?>