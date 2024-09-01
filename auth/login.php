<?php 

include "../connect.php";


$password=filterRequest("password");//sha1($_POST['password']);
$email=filterRequest("email");

//$stmt=$con->prepare("SELECT * FROM users WHERE users_email = ? AND users_password = ? AND users_approve = 1");
//$stmt->execute(array($email,$password));
//$count=$stmt->rowCount();

//result($count);

getData("Users","user_email = ? AND user_password = ?",array($email,$password));


?>