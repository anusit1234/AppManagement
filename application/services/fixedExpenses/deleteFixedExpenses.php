<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();


$fix_expenses_id = $_GET['fix_expenses_id'];


        $query_expenses = $db->delete("fixed_expenses", "fix_expenses_id='$fix_expenses_id' ");

        if ($query_expenses == TRUE) {

            echo json_encode("success");
        }
        else{
            echo json_encode(null);
        }

?>