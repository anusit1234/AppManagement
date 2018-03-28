<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

// $i = 3 ;   //test id
$id = $_GET['user_id'];
$month = $_GET['month'];

//ดึงข้อมูลรายการรายรับทั้งหมด
$sql = "SELECT t2.name as category, t1.amount, t1.created
            FROM income t1 inner join income_categories t2 on t1.income_cate_id = t2.id
            WHERE t1.user_id = '$id' and  MONTH(t1.created)='$month'
            ";

$query = $db->query($sql);

$arr = array();
    while($rows = mysqli_fetch_assoc($query)){
        $arr[] = $rows;
    }
    
    echo json_encode($arr);

?>