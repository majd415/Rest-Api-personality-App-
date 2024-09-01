<?php 
include "../../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);


$negative_fetures=filterRequest("negative_fetures");





$data=array("negative_fetures"=>$negative_fetures,);
updateData("showfituries",$data,"id_showfituries='1'");



?>