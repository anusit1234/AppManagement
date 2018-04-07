<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

$data = file_get_contents("php://input");   //รับค่าจาก ionic

$objData = json_decode($data);              //แปลง json เป็น object

$user_id = $objData->data->user_id;
$income_id = $objData->data->income_id;
$income_cate_id = $objData->data->income_cate_id;
$amount = $objData->data->amount;
// $images = $objData->data->images;
$created = $objData->data->created;
    

        $value_income = array(
            // "user_id" => $user_id,
            "income_cate_id" => $income_cate_id,
            "amount" => $amount,
            // "images" => $images,
            "created" => $created
        );
        $query_income = $db->update("income", $value_income, "income_id='$income_id' ");

        if ($query_income == TRUE) {

            echo json_encode("success");
        }
        else{
            echo json_encode(null);
        }

?>