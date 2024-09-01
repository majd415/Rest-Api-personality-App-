<?php 

include "../connect.php";


$email=filterRequest("email");
$verifycode=rand(10000,99999);
$data=array(
    "user_verifycode"=>$verifycode
    );

updateData('Users',$data,"user_email=='$email'");

    sendEmail($email,"VerfiyCode Ecomerce","CODE: $verifycode " );








?>