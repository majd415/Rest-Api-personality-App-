<?php 
include "../connect.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);


$userId=filterRequest("userId");
$itemsId=filterRequest("itemsId");
$count=getData("cart","cart_itemsid=$itemsId AND cart_usersid=$userId",null,false);

    $data=array(
    "cart_usersid"=>$userId,
    "cart_itemsid"=>$itemsId,

);

insertData("cart",$data);
 

?>

