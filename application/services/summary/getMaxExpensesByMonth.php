<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

// $i = 3 ;   //test 
$id = $_GET['user_id'];
$month = $_GET['month'];

$sql = "SELECT
	        t1.daily_expenses_id as dailyExpensesId,
            t2.name as cateName,
            t3.name as catePay,
            t1.amount as amount,
            t1.created as createDate
        FROM
            daily_expenses t1
        INNER JOIN daily_expenses_categories t2 ON
            t1.daily_expenses_cate_id = t2.id
        INNER JOIN payment_channel_categories t3 ON
            t1.payment_channel_id = t3.id
        WHERE
            t1.user_id = '$id' and  MONTH(t1.created)='$month' GROUP BY t2.name order by t1.amount DESC
            ";

$query = $db->query($sql);

$arr = array();
    while($rows = mysqli_fetch_assoc($query)){
        $arr[] = $rows;
    }
    
    echo json_encode($arr);

?>