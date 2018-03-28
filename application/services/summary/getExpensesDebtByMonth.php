<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

// $i = 3 ;   //test id
$id = $_GET['user_id'];
$month = $_GET['month'];

$sql = "SELECT T1.total1 AS creditCard ,
               T2.total2 AS paymentCard,
               T1.total1 + T2.total2 AS total
            FROM (SELECT sum(amount) AS total1 FROM daily_expenses t1 
                    inner join payment_channel_categories t2 on t1.payment_channel_id = t2.id
                    WHERE t1.user_id = '$id' and t1.payment_channel_id ='3' and  MONTH(t1.created)='$month' order by t1.created DESC) AS T1,
                 (SELECT sum(amount) AS total2 FROM daily_expenses t1 
                    inner join payment_channel_categories t2 on t1.payment_channel_id = t2.id
                    WHERE t1.user_id = '$id' and t1.payment_channel_id ='4' and  MONTH(t1.created)='$month' order by t1.created DESC) AS T2
            ";

$query = $db->query($sql);

$arr = array();
    while($rows = mysqli_fetch_assoc($query)){
        $arr[] = $rows;
    }
    
    echo json_encode($arr);

?>