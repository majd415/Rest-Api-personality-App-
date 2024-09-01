<?php 
include "../connect.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);


$userId=filterRequest("userId");
$itemsId=filterRequest("itemsId");
$stmt=$con->prepare("SELECT COUNT(cart.cart_id) as countitems FROM cart WHERE cart_usersid=$userId AND cart_itemsid=$itemsId ");

  $stmt->execute();
  $count=$stmt->rowCount();
  $data=$stmt->fetchColumn();
  if($count>0 ){
      echo json_encode(array("status"=>"success","data"=>$data));
      
      
  }else{
      echo json_encode(array("status"=>"success","data"=>"0"));
      
  }

?>