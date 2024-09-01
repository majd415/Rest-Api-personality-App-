<?php 
include "../../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);


$payamount=filterRequest("payamount");





$data=array("payamount"=>$payamount,

);
updateData("payamount",$data,"id='1'");



?>