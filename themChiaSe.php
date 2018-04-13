<?php
require 'dbCon.php';


$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$idchiase = $obj['idchiase'];
$idduocchiase = $obj['idduocchiase'];

$qrkiemtra ="SELECT * FROM chiase where IdChiaSe = $idchiase  and IdDuocChiaSe = $idduocchiase";
$qr = "INSERT INTO chiase VALUES(
    null, $idchiase, $idduocchiase)";

$result = mysql_query($qrkiemtra);
if($idchiase == $idduocchiase){
    $jsonstring = '{
        "LoiTrung" : "Tài khoản này là tài khoản chia se"
    }';
    echo $jsonstring;
}
else if(mysql_num_rows($result) == 1)
{
    $jsonstring = '{
        "Loi" : "Tài khoản này đã được chia sẽ"
    }';
    echo $jsonstring;
}else{
    mysql_query($qr);
    $jsonstringthanhcong = '{
        "thanhcong" : "OK rồi"
    }';
    echo $jsonstringthanhcong;
}





?>