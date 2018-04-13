
<?php
require 'dbCon.php';
require 'model/TaiKhoan.php';

$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$email = $obj['emaildangki'];


$matkhau = $obj['matkhaudangki'];
$tenhienthi = $obj['tenhienthidangki'];

$qrkiemtra = "SELECT * FROM taikhoan where Email='$email'";
$qr = "INSERT INTO taikhoan VALUES(
    null, '$email','$matkhau','$tenhienthi'
)";

//$ds = mysql_query($qr);
$result = mysql_query($qrkiemtra);
if(mysql_num_rows($result) == 1)
{
    $jsonstring = '{
        "Loi" : "Lỗi vờ lờ"
    }';
    echo $jsonstring;
    // echo "me cáu";
    // echo "Email đã tồn tại";
}else{
    mysql_query($qr);
    $jsonstringthanhcong = '{
        "thanhcong" : "OK rồi"
    }';
    echo $jsonstringthanhcong;
}




?>