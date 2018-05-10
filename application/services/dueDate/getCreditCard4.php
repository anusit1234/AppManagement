<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();
$id = $_GET['user_id'];
    
$sql = "SELECT t1.credit_card4 as credit_card,t2.name as credit 
            FROM due_date t1 INNER JOIN credit_cards_categories t2 on t1.credit_card_id4 = t2.id WHERE user_id='$id'
        ";


$query = $db->query($sql);


$arr = array();
    while($rows = mysqli_fetch_assoc($query)){
        $arr[] = $rows;
    }
    
    echo json_encode($arr);


?>