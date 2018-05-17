<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

// $data = file_get_contents("php://input");   //รับค่าจาก ionic

// $objData = json_decode($data);              //แปลง json เป็น object

$user_id = $_GET['user_id'];
$status = 0;

    $value_user = array(

        "status" => $status

    );

        $query_user = $db->update("users", $value_user, "id='$user_id' ");

        if ($query_user == TRUE) {

            echo json_encode("success");
        }
        else{
            echo json_encode(null);
        }


?>