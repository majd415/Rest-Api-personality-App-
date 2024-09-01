<?php 

include "../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);



$username=filterRequest("username");
$password=filterRequest("password");//sha1($_POST['password']);
$email=filterRequest("email");
$phone=filterRequest("phone");
$verifycode=rand(10000,99999);

$stmt=$con->prepare("SELECT * FROM Users WHERE user_email = ? OR user_phone = ? ");
$stmt->execute(array($email,$phone));
$count=$stmt->rowCount();

if($count>0){

    printFailure();
}else{

    $data=array(
        "user_name"=>$username,
        "user_password"=>$password,

        "user_email"=>$email,

        "user_phone"=>$phone,

        "user_verifycode"=>$verifycode,


    );
    sendEmail($email,"VerfiyCode test app","CODE: $verifycode " );
    insertData("Users",$data);
}





?>