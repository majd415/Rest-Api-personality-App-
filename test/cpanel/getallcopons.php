<?php
include "../../connect.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);







$stmt=$con->prepare("SELECT * FROM `discounts`  ;
");
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
$count=$stmt->rowCount();
if($count > 0){
    echo json_encode(array("status"=> "success","data"=>$data));
    
    
}else{
        echo json_encode(array("status"=> "failure"));

    
}


?>