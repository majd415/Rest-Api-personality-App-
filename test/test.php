<?php
include "../connect.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);


 $groupAnswar=filterRequest("groupAnswar");




$stmt=$con->prepare("SELECT answer_id, question_id, answer_text,answare_text_en, personality_id, created_at 
FROM new2_answer_text_with_row_numbers WHERE row_num BETWEEN $groupAnswar AND $groupAnswar ;");
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
$count=$stmt->rowCount();
if($count > 0){
    echo json_encode(array("status"=> "success","data"=>$data));
    
    
}else{
        echo json_encode(array("status"=> "failure"));

    
}


?>