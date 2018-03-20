<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $db = new database();
    $value_pc = array(
        "name" => trim($_POST['name']),
        "status" => trim($_POST['status'])
    );
    $query_pc = $db->insert("daily_expenses_categories", $value_pc);

    if ($query_pc == TRUE) {
        header("location:" . $baseUrl . "/back/alert4");
    }
    
}