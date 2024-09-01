<?php 
include "../connect.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);





$userId=filterRequest("userId");
$itemsId=filterRequest("itemsId");


deleteData("cart","cart_id=(SELECT cart_id FROM cart WHERE cart_usersid=$userId AND cart_itemsid=$itemsId LIMIT 1) ");




?>