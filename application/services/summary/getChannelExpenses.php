<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

// $i = 3 ;   //test id
$id = $_GET['user_id'];

//ดึงข้อมูลยอดรวมรายจ่ายแต่ละช่องทาง
$sql = "SELECT T1.total1 AS cash,
               T2.total2 AS account,
               T3.total3 AS creditCard,
               T4.total4 AS paymentCards,
               T5.total5 AS promtpay,
               T1.total1 + T2.total2 + T3.total3 + T4.total4 + T5.total5 AS total
            FROM (SELECT sum(amount) AS total1 FROM daily_expenses t1 
                    inner join payment_channel_categories t2 on t1.payment_channel_id = t2.id
                    WHERE t1.user_id = '$id' and t1.payment_channel_id ='1') AS T1,
                 (SELECT sum(amount) AS total2 FROM daily_expenses t1 
                    inner join payment_channel_categories t2 on t1.payment_channel_id = t2.id
                    WHERE t1.user_id = '$id' and t1.payment_channel_id ='2') AS T2,
                 (SELECT sum(amount) AS total3 FROM daily_expenses t1 
                    inner join payment_channel_categories t2 on t1.payment_channel_id = t2.id
                    WHERE t1.user_id = '$id' and t1.payment_channel_id ='3') AS T3,
                 (SELECT sum(amount) AS total4 FROM daily_expenses t1 
                    inner join payment_channel_categories t2 on t1.payment_channel_id = t2.id
                    WHERE t1.user_id = '$id' and t1.payment_channel_id ='4') AS T4,
                 (SELECT sum(amount) AS total5 FROM daily_expenses t1 
                    inner join payment_channel_categories t2 on t1.payment_channel_id = t2.id
                    WHERE t1.user_id = '$id' and t1.payment_channel_id ='5') AS T5
            ";

$query = $db->query($sql);

$arr = array();
    while($rows = mysqli_fetch_assoc($query)){
        $arr[] = $rows;
    }
    
    echo json_encode($arr);

?>