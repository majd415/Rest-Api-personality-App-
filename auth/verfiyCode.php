<?php 
include "../connect.php";
$email=filterRequest("email");
$verifycode=filterRequest("verifycode");


$stmt= $con->prepare("SELECT * FROM Users WHERE user_email = '$email' AND user_verifycode = '$verifycode' ");

$stmt->execute();
$count=$stmt->rowCount();
if($count > 0){
 
$data=array("users_approve"=>"1");
updateData("Users",$data,"user_email= '$email'");

}else{

    printFailure("verifycode not correct");

}

?>