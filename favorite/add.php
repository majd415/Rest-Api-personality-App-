<?php 
include "../connect.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);


$userId=filterRequest("userId");
$itemsId=filterRequest("itemsId");

$data=array(
    "favorite_usersid"=>$userId,
    "favorite_itemsid"=>$itemsId,

);

insertData("favorite",$data);





?>