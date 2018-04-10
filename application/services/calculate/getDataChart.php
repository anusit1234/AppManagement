<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

// $i = 3 ;   //test id
$id = $_GET['user_id'];
$month = $_GET['month'];
    
$sql = "SELECT T1.total AS income,
               T2.total AS fixedExp,
               T3.total AS dailyExp
            FROM (SELECT sum(amount) as total FROM income where user_id='$id' and  MONTH(created)='$month' order by created DESC) AS T1,
            	 (SELECT sum(amount) as total FROM fixed_Expenses where user_id='$id'and  MONTH(created)='$month' order by created DESC) AS T2,
                 (SELECT sum(amount) as total FROM daily_expenses where user_id='$id'and  MONTH(created)='$month' order by created DESC) AS T3 ";

$query = $db->query($sql);

$arr = array();
    while($rows = mysqli_fetch_assoc($query)){
        $arr = $rows;
    }
    
    echo json_encode($arr);

?>