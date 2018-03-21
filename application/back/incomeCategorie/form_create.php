<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $db = new database();
    
    $name = $_REQUEST["name"];
    $sql = "SELECT name FROM income_categories where name='$name' ";
    $query = $db->query($sql);
    $rows = $db->rows($query);

    if($rows > 0){
        echo "<script>";
        echo "alert(' มีข้อมูลนี้อยู่ในระบบแล้ว กรุณากรอกข้อมูลใหม่อีกครั้ง');";
        echo "window.location='$baseUrl/back/incomeCategorie/create'";
        echo "</script>";
    }
    else{
        $value_pc = array(
            "name" => trim($_POST['name']),
            "created" => date('Y-m-d')
        );
        $query_pc = $db->insert("income_categories", $value_pc);

        
        if ($query_pc == TRUE) {
                echo "<script>";
                // header("location:" . $baseUrl . "/back/alert2");
                echo "alert('บันทึกข้อมูลสำเร็จ');";
                echo "window.location='$baseUrl/back/incomeCategorie'";
                echo "</script>";
        }

        
    }
}
