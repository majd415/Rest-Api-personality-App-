<?php 
include "../../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);


$email=filterRequest("email");
$whatsapp=filterRequest("whatsapp");
$phone=filterRequest("phone");




$data=array("email"=>$email,
"whatsapp"=>$whatsapp,
"phone"=>$phone 
);
updateData("Contact",$data,"id='1'");



?>