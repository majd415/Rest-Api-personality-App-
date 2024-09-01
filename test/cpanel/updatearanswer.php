<?php 
include "../../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);


$aransware=filterRequest("aransware");
$idaransware=filterRequest("idaransware");





$data=array("answer_text"=>"$aransware",

);
updateData("Answers",$data,"answer_id=$idaransware");



?>