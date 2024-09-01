<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "../connect.php";
$usersid =filterRequest("usersid");


getAllData("address", "address_usersid=$usersid");


?>