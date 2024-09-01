<?php 
include "../../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);


$questiontextar=filterRequest("questiontextar");





$data=array("question_text_ar"=>$questiontextar,

);
updateData("Questions",$data,"question_id=1");



?>