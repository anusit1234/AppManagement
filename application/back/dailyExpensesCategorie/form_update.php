<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $db = new database();
    $value_pc = array(
        "name" => trim($_POST['name']),
        "status" => trim($_POST['status'])
    );
    $query_pc = $db->update("daily_expenses_categories", $value_pc, "id='{$_POST['id']}'");

    if ($query_pc == TRUE) {
        echo "<script>";
        // header("location:" . $baseUrl . "/back/alert2");
        echo "alert('แก้ไขข้อมูลสำเร็จ');";
        echo "window.location='$baseUrl/back/daily_expenses_categories'";
        echo "</script>";
        // header("location:" . $baseUrl . "/back/dailyExpensesCategorie");
    }
    
}