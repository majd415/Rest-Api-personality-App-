<?php 
include "../../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);


$clientId=filterRequest("clientId");
$clientSecret=filterRequest("clientSecret");
$liveMode=filterRequest("liveMode");





$data=array(
    "clientId"=>"$clientId",
        "clientSecret"=>"$clientSecret",

    "liveMode"=> $liveMode,


);
updateData("paypal",$data,"id='1'");



?>