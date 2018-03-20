<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $db = new database();
    $value_pc = array(
        "name" => trim($_POST['name'])/*,
        "created" => date('Y-m-d H:i:s')*/
    );
    $query_pc = $db->insert("fixed_expenses_categories", $value_pc);

    if ($query_pc == TRUE) {
        header("location:" . $baseUrl . "/back/alert3");
    }
    
}