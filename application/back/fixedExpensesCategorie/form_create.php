<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $db = new database();
    
    $name = $_REQUEST["name"];
    $sql = "SELECT name FROM fixed_expenses_categories where name='$name' ";
    $query = $db->query($sql);
    $rows = $db->rows($query);

    if($rows > 0){
        echo "<script>";
        echo "alert(' มีข้อมูลนี้อยู่ในระบบแล้ว กรุณากรอกข้อมูลใหม่อีกครั้ง');";
        echo "window.location='$baseUrl/back/fixedExpensesCategorie/create'";
        echo "</script>";
    }
    else{
        $value_pc = array(
            "name" => trim($_POST['name']),
            "created" => date('d-m-Y')
        );
        $query_pc = $db->insert("fixed_expenses_categories", $value_pc);

        
        if ($query_pc == TRUE) {
                echo "<script>";
                // header("location:" . $baseUrl . "/back/alert3");
                
                echo "alert('บันทึกข้อมูลสำเร็จ');";
                echo "window.location='$baseUrl/back/fixedExpensesCategorie'";
                echo "</script>";
        }

        
    }
}
