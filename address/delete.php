<?php 
include "../connect.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);





$addressid=filterRequest("addressid");


deleteData("address","address_id= $addressid");




?>