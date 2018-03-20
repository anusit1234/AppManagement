<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

    
$sql = "SELECT name,direction FROM financial_risk where risk_id=3";       //เสี่ยง


$query = $db->query($sql);


$arr = array();
    while($rows = mysqli_fetch_assoc($query)){
        $arr[] = $rows;
    }
    
    echo json_encode($arr);


?>