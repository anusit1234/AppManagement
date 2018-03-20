<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

// $i = 3 ;
$id = $_GET['user_id'];
    
$sql = "SELECT sum(amount) as totalIncome FROM income where user_id='$id'";


$query = $db->query($sql);


$arr = array();
    while($rows = mysqli_fetch_assoc($query)){
        $arr[] = $rows;
    }
    
    echo json_encode($arr);


?>