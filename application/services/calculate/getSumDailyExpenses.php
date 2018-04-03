<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

// $i = 3 ;
$id = $_GET['user_id'];
$month = $_GET['month'];

    
$sql = "SELECT sum(amount) as totalDailyExp FROM daily_expenses where user_id='$id'and  MONTH(created)='$month'";


$query = $db->query($sql);


$arr = array();
    while($rows = mysqli_fetch_assoc($query)){
        $arr[] = $rows;
    }
    
    echo json_encode($arr);


?>