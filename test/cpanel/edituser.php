<?php 
include "../../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);


$email=filterRequest("email");
$id=filterRequest("userid");
$username=filterRequest("username");
$userpassword=filterRequest("userpassword");
$userphone=filterRequest("userphone");




$data=array("user_name"=>$username,
"user_password"=>$userpassword,
"user_phone"=>$userphone 
);
updateData("Users",$data,"user_email= '$email' And user_id=$id ");



?>