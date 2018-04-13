<?php
require("dbCon.php");

$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$email = $obj['email'];
$matkhau = $obj['matkhau'];

$qr = " SELECT * FROM taikhoan where Email='$email' and MatKhau='$matkhau'";

$user = mysql_query($qr);
if(mysql_num_rows($user) == 1){
    $u = mysql_fetch_array($user);
    $mang = array();
    $mang["ID"] = $u["ID"];
    $mang["Email"] = $u["Email"];
    $mang["TenHienThi"] = $u["TenHienThi"];

    echo json_encode($mang);
}else{
    echo "{'Loi':'Tài khoản hoặc mật khẩu không đúng'}";
}
?>