<?php    

include "../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

$id=filterRequest("id");

getAllData("myFavorite", "favorite_usersid=?",array($id));



?>