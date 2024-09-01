<?php 

include "../../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);



$user_name=filterRequest("user_name");
$user_email=filterRequest("user_email");//sha1($_POST['password']);
$user_password=filterRequest("user_password");
$user_phone=filterRequest("user_phone");
// $user_verifycode=filterRequest("user_verifycode");

// $users_approve=filterRequest("users_approve");



    $data=array(
        "user_name"=>$user_name,
        "user_email"=>$user_email,

        "user_password"=>$user_password,

        "user_phone"=>$user_phone,
         "user_verifycode"=>1111,
        "users_approve"=>1,





    );
    
    insertData("Users",$data);





?>