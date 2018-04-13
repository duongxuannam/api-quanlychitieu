<?php
require 'dbCon.php';


$json = file_get_contents("php://input");
$obj = json_decode($json, TRUE);
$id = $obj['id'];



$qr = "DELETE FROM chi WHERE ID = $id ";
//$ds = mysql_query($qr);
mysql_query($qr);
?>