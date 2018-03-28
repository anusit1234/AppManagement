<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $db = new database();
    
    $name = $_REQUEST["name"];
    $cate_table = $_REQUEST["cate_table"];
    $status = $_REQUEST["status"];

    $sql = "SELECT name FROM $cate_table where name='$name' ";
    $query = $db->query($sql);
    $rows = $db->rows($query);

    if($rows > 0){
        echo "<script>";
        echo "alert(' มีข้อมูลนี้อยู่ในระบบแล้ว กรุณากรอกข้อมูลใหม่อีกครั้ง');";
        echo "window.location='$baseUrl/back/$cate_table'";
        echo "</script>";
    }
    else if($status != null){
        $value_pc = array(
            "name" => trim($_POST['name']),
            "status" => $status,
            "created" => date('Y-m-d')
        );
        $query_pc = $db->insert("$cate_table", $value_pc);

        
        if ($query_pc == TRUE) {
                echo "<script>";
                // header("location:" . $baseUrl . "/back/alert3");
                
                echo "alert('บันทึกข้อมูลสำเร็จ');";
                echo "window.location='$baseUrl/back/$cate_table'";
                echo "</script>";
        }
    }
    else{
        $value_pc = array(
            "name" => trim($_POST['name']),
            "created" => date('Y-m-d')
        );
        $query_pc = $db->insert("$cate_table", $value_pc);

        
        if ($query_pc == TRUE) {
                echo "<script>";
                // header("location:" . $baseUrl . "/back/alert3");
                
                echo "alert('บันทึกข้อมูลสำเร็จ');";
                echo "window.location='$baseUrl/back/$cate_table'";
                echo "</script>";
        }

        
    }
}
