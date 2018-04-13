<?php
require 'dbCon.php';


$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$id = $obj['id'];

$qr = "select sum(t.Tien) as 'TongThu' from thu as t, taikhoan as tk where tk.ID =$id and tk.ID= t.IDTaiKhoan ";
$chitiet = mysql_query($qr);
$qr2 = "select sum(t.Tien) as 'TongChi' from chi as t, taikhoan as tk where tk.ID =$id and tk.ID= t.IDTaiKhoan ";
$chitiet2 = mysql_query($qr2);
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
    $u2 = mysql_fetch_array($chitiet2);
    $mang = array();
    $mang["TongThu"] = $u["TongThu"];
    $mang["TongChi"] = $u2["TongChi"];   


    echo json_encode($mang);
}else{
    echo "{'Loi':'Tài khoản hoặc mật khẩu không đúng'}";
}
?>
