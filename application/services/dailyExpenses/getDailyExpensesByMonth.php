<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

// $i = 3 ;   //test id
$id = $_GET['user_id'];
$month = $_GET['month'];

//ดึงข้อมูลรายการรายจ่ายที่ไม่จำเป็น
$sql = "SELECT t1.daily_expenses_id, t2.name as category, t3.name as channel, t1.amount, t1.created
            FROM daily_expenses t1 inner join daily_expenses_categories t2 on t1.daily_expenses_cate_id = t2.id
                                   inner join payment_channel_categories t3 on t1.payment_channel_id = t3.id
                    WHERE t1.user_id = '$id' and  MONTH(t1.created)='$month' order by t1.created DESC
            ";

$query = $db->query($sql);

$arr = array();
    while($rows = mysqli_fetch_assoc($query)){
        $arr[] = $rows;
    }
    
    echo json_encode($arr);

?>