<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();


$daily_expenses_id = $_GET['daily_expenses_id'];


        $query_expenses = $db->delete("daily_expenses", "daily_expenses_id='$daily_expenses_id' ");

        if ($query_expenses == TRUE) {

            echo json_encode("success");
        }
        else{
            echo json_encode(null);
        }

?>