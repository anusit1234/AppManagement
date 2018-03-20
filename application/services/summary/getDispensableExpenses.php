<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

// $i = 3 ;   //test id
$id = $_GET['user_id'];

//ดึงข้อมูลรายการรายจ่ายที่ไม่จำเป็น
$sql = "SELECT t2.name as categoryExp, t3.name as channelExp, t1.amount, t1.create_date
            FROM daily_expenses t1 inner join daily_expenses_categories t2 on t1.daily_expenses_cate_id = t2.id
                                   inner join payment_channel_categories t3 on t1.payment_channel_id = t3.id
                    WHERE t1.user_id = '$id' and t2.status ='0'
            ";

$query = $db->query($sql);

$arr = array();
    while($rows = mysqli_fetch_assoc($query)){
        $arr[] = $rows;
    }
    
    echo json_encode($arr);

?>