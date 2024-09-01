<?php 
include "../../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);


$questiontexten=filterRequest("questiontexten");





$data=array("question_text_en"=>$questiontexten,

);
updateData("Questions",$data,"question_id=1");



?>