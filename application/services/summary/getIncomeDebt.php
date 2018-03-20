<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

// $i = 3 ;   //test 
$id = $_GET['user_id'];

$sql = "SELECT T1.total1 AS creditCard,
               T2.total2 AS cashCard,
               T1.total1 + T2.total2 AS total
            FROM (SELECT sum(amount) AS total1 FROM income t1 
                    inner join income_categories t2 on t1.income_cate_id = t2.id
                    WHERE t1.user_id = '$id' and t1.income_cate_id ='12') AS T1,
                    (SELECT sum(amount) AS total2 FROM income t1 
                    inner join income_categories t2 on t1.income_cate_id = t2.id
                    WHERE t1.user_id = '$id' and t1.income_cate_id ='11') AS T2
            ";

$query = $db->query($sql);

$arr = array();
    while($rows = mysqli_fetch_assoc($query)){
        $arr[] = $rows;
    }
    
    echo json_encode($arr);

?>