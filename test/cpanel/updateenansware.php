<?php 
include "../../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);


$enansware=filterRequest("enansware");
$idaransware=filterRequest("idaransware");





$data=array("answare_text_en"=>$enansware,

);
updateData("Answers",$data,"answer_id=$idaransware");



?>