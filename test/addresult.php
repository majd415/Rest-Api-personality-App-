<?php 

include "../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);



$user_id=filterRequest("user_id");
$test_id=filterRequest("test_id");//sha1($_POST['password']);
$personality_type=filterRequest("personality_type");
$results_percentage=filterRequest("results_percentage");


    $data=array(
        "user_id"=>$user_id,
        "test_id"=>$test_id,

        "personality_type"=>$personality_type,

        "results_percentage"=>$results_percentage,



    );
    
    insertData("TestResults",$data);





?>