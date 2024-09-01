<?php
include "../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);


$email=filterRequest("email");

$password=filterRequest("password");
$data=array("user_password"=>"$password");
updateData("Users",$data,"user_email='$email'");


?>