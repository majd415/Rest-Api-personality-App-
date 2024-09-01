<?php 
include "../connect.php";


$userId=filterRequest("userId");
$itemsId=filterRequest("itemsId");


deleteData("favorite","favorite_usersid=$userId AND favorite_itemsid =$itemsId");




?>