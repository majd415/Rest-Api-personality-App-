<?php 

include "../../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);



$user_id=filterRequest("user_id");




    
deleteData("Users","user_id=$user_id" );




?>