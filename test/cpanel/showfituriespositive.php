<?php 
include "../../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);


$positive_fetures=filterRequest("positive_fetures");





$data=array("positive_fetures"=>$positive_fetures,);
updateData("showfituries",$data,"id_showfituries='1'");



?>