<?php 

include "../connect.php";


$email=filterRequest("email");
$verifycode=rand(10000,99999);

$stmt=$con->prepare("SELECT * FROM Users WHERE user_email = ?  ");
$stmt->execute(array($email));
$count=$stmt->rowCount();

result($count);
if($count>0){
    $data=array("user_verifycode"=>$verifycode);
    updateData("Users",$data,"user_email= '$email'",false); 
    sendEmail($email,"VerfiyCode test app","CODE: $verifycode " );


}



?>