<?php
include "../connect.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);


//$categoryid=filterRequest("id");
// getData("itemsview","categories_id=?",array($categoryid));
///////

// $items= getAllData("itemsview","`categories_id`=?",array($categoryid),false);
// if($items !="{\"status\":\"failure\"}"){
//     $alldata['status']="success";
// }
// $alldata['data']=$items;

// echo json_encode($alldata);

////
 $categoryid=filterRequest("id");

 $userId=filterRequest("userid");


$stmt=$con->prepare("SELECT `items1view`.*,1 as favorite ,(items_price -(items_price *items_discount/100)) as itemspricediscount FROM `items1view` INNER JOIN favorite on favorite.favorite_itemsid=items1view.items_id AND favorite.favorite_usersid=$userId
WHERE categories_id=$categoryid
UNION All SELECT *,0 as favorite ,(items_price -(items_price *items_discount/100)) as itemspricediscount  FROM `items1view`WHERE categories_id=$categoryid AND  items_id NOT IN (
SELECT `items1view`.`items_id` FROM `items1view` INNER JOIN favorite on favorite.favorite_itemsid=items1view.items_id AND favorite.favorite_usersid=$userId

) ;");
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
$count=$stmt->rowCount();
if($count > 0){
    echo json_encode(array("status"=> "success","data"=>$data));
    
    
}else{
        echo json_encode(array("status"=> "failure"));

    
}


?>