<?php
require 'dbCon.php';


$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$id = $obj['id'];
$matkhaucu = $obj['matkhaucu'];
$matkhaumoi = $obj['matkhaumoi'];

$kiemtra = "SELECT * FROM taikhoan WHERE ID =$id AND MatKhau = '$matkhaucu' ";
$qr = "UPDATE taikhoan 
        SET MatKhau = '$matkhaumoi' 
        WHERE ID = $id
";
$result = mysql_query($kiemtra);
if(mysql_num_rows($result) != 1)
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