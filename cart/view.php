<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "../connect.php";

$userid =filterRequest("usersid");

$data = getAllData("cartview", "cart_usersid =$userid", null, false);

$stmt = $con->prepare("SELECT SUM(itemsprice) as totalprice, COUNT(countitems) as totalcount FROM cartview WHERE cartview.cart_usersid = $userid GROUP BY cart_usersid ");
//if we want the result for count items on cart for all what we add we put this // SUM(countitems) else if we want the result with calssifications with the //kind of we put COUNT(countitems)

 $stmt->execute();

$datacountprice = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode(array(
    "status" => "success",
    "datacart" => $data,
    "countprice" => $datacountprice

));

?>

