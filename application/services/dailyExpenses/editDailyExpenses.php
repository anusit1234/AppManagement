<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

$data = file_get_contents("php://input");   //รับค่าจาก ionic

$objData = json_decode($data);              //แปลง json เป็น object

$user_id = $objData->data->user_id;
$daily_expenses_id = $objData->data->daily_expenses_id;
$daily_expenses_cate_id = $objData->data->daily_expenses_cate_id;
$amount = $objData->data->amount;
$payment_channel_id = $objData->data->payment_channel_id;
$images = $objData->data->images;
$created = $objData->data->created;
    

        $value_dailyExp = array(
            // "user_id" => $user_id,
            "daily_expenses_cate_id" => $daily_expenses_cate_id,
            "payment_channel_id" => $payment_channel_id,
            "amount" => $amount,
            "images" => $images,
            "created" => $created
        );
        $query_dailyExp = $db->update("daily_expenses", $value_dailyExp, "daily_expenses_id='$daily_expenses_id'");

        if ($query_dailyExp == TRUE) {

            echo json_encode("success");
        }
        else{
            echo json_encode(null);
        }
    // }

?>