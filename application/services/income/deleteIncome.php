<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();


$income_id = $_GET['income_id'];


        $query_income = $db->delete("income", "income_id='$income_id' ");

        if ($query_income == TRUE) {

            echo json_encode("success");
        }
        else{
            echo json_encode(null);
        }

?>