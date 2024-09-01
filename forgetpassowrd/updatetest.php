<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../connect.php";
echo "تم الاتصال بنجاح.";
$email=filterRequest("email");


$data=array("users_name"=>"majdha1111");
$updateResult=updateData("users",$data,"users_email= '$email' ",false);
if ($updateResult > 0) {
    echo "تم تحديث البيانات بنجاح.";
} else {
    echo "فشل في تحديث البيانات.";
}



?>