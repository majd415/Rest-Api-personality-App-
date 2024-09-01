<?php 

include "../../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);



$id_discount=filterRequest("id_discount");




    
deleteData("discounts","id_discount=$id_discount" );




?>