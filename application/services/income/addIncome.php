<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

$data = file_get_contents("php://input");   //รับค่าจาก ionic

$objData = json_decode($data);              //แปลง json เป็น object

$user_id = $objData->data->user_id;
$income_cate_id = $objData->data->income_cate_id;
$amount = $objData->data->amount;
$images = $objData->data->images;
$created = $objData->data->created;
    

// $db = new database();
    // $sql = "SELECT name FROM users where email='$email' and permission='member'";
    // $query = $db->query($sql);
    // $rows = $db->rows($query);

    // if($rows > 0){
    //     echo json_encode(null);
    // }
    // else{
        $value_due_date = array(
            "user_id" => $user_id,
            "income_cate_id" => $income_cate_id,
            "amount" => $amount,
            "images" => $images,
            "created" => $created
        );
        $query_due_date = $db->insert("income", $value_due_date);

        if ($query_due_date == TRUE) {

            echo json_encode("success");
        }
        else{
            echo json_encode(null);
        }
    // }

?>