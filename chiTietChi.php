<?php
require 'dbCon.php';
require 'model/Chi.php';

$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$id = $obj['id'];

$qr = "SELECT * FROM chi where ID = $id";
$chitiet = mysql_query($qr);
// $mang = array();

// while($row = mysql_fetch_array($ds)){
//     array_push($mang, new Thu(
//         $row['ID'], 
//         $row['GhiChu'], 
//         $row['Tien'], 
//         $row['Ngay'],
//         $row['IDTaiKhoan'],
//         $row['TenLoaiThu']
//     ));  
// }
// echo json_encode($mang);

// 
if(mysql_num_rows($chitiet) == 1){
    $u = mysql_fetch_array($chitiet);
    $mang = array();
    $mang["ID"] = $u["ID"];
        $mang['GhiChu']= $u["GhiChu"];
        $mang['Tien']= $u["Tien"];
        $mang['Ngay']= $u["Ngay"];
        $mang['IDTaiKhoan']= $u["ID"];
        $mang['IDTaiKhoan']= $u["ID"];
        $mang['TenLoaiChi']= $u["TenLoaiChi"];
        $mang['VoiAi']= $u["VoiAi"];


    echo json_encode($mang);
}else{
    echo "{'Loi':'Tài khoản hoặc mật khẩu không đúng'}";
}
?>
