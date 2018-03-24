<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

$data = file_get_contents("php://input");   //รับค่าจาก ionic

$objData = json_decode($data);              //แปลง json เป็น object

$user_id = $objData->data->user_id;
$water = $objData->data->water;
$electricity = $objData->data->electricity;
$internet = $objData->data->internet;
$telephone = $objData->data->telephone;
$credit_card = $objData->data->credit_card;
$credit_card_id = $objData->data->credit_card_id;
    

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
            "water" => $water,
            "electricity" => $electricity,
            "internet" => $internet,
            "telephone" => $telephone,
            "credit_card" => $credit_card,
            "credit_card_id" => $credit_card_id,
            "created" => date('Y-m-d')
        );
        $query_due_date = $db->insert("due_date", $value_due_date);

        if ($query_due_date == TRUE) {

            echo json_encode("success");
        }
        else{
            echo json_encode(null);
        }
    // }

?>