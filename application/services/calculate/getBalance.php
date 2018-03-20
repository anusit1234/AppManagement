<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

// $i = 3 ;   //test id
$id = $_GET['user_id'];
    
$sql = "SELECT T1.total1 - T2.total2 - T3.total3 AS balance
            FROM (SELECT sum(amount) AS total1 FROM income WHERE user_id='$id' ) AS T1,
            	 (SELECT sum(amount) AS total2 FROM fixed_expenses WHERE user_id = '$id') AS T2,
                 (SELECT sum(amount) AS total3 FROM daily_expenses WHERE user_id = '$id') AS T3 ";

$query = $db->query($sql);

$arr = array();
    while($rows = mysqli_fetch_assoc($query)){
        $arr[] = $rows;
    }
    
    echo json_encode($arr);

?>