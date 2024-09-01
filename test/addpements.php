<?php 

include "../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);



$user_id=filterRequest("user_id");
$paymentamount=filterRequest("payment_amount");//sha1($_POST['password']);
$payment_status=filterRequest("payment_status");


    $data=array(
        "user_id"=>$user_id,
        "payment_amount"=>$paymentamount,

        "payment_status"=>$payment_status,




    );
    
    insertData("Payments",$data);





?>