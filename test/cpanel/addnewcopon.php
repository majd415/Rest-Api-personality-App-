
<?php 

include "../../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);



$discount_code=filterRequest("discount_code");
$discount_value=filterRequest("discount_value");




    $data=array(
        "discount_code"=>$discount_code,
        "discount_value"=>$discount_value,

     




    );
    
    insertData("discounts",$data);





?>