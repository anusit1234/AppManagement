<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $db = new database();
    $email = $_REQUEST["email"];
    $sql = "SELECT name FROM users where email='$email' ";
    $query = $db->query($sql);
    $rows = $db->rows($query);

    if($rows > 0){
        echo "<script>";
        echo "alert(' มีอีเมลนี้อยู่ในระบบแล้ว กรุณากรอกอีเมลใหม่อีกครั้ง');";
        echo "window.location='$baseUrl/back/user/create'";
        echo "</script>";
    }
    else{
        $value_user = array(
            "name" => trim($_POST['name']),
            "surname" => trim($_POST['surname']),
            "email" => trim($_POST['email']),
            "password" => trim($_POST['password']),
            "age" => trim($_POST['age']),
            "sex" => trim($_POST['sex']),
            "career" => trim($_POST['career']),
            "permission" => trim($_POST['permission'])
        );
        $query_user = $db->insert("users", $value_user);

        if ($query_user == TRUE) {
            // header("location:" . $baseUrl . "/back/alert");
            echo "<script>";
            // header("location:" . $baseUrl . "/back/alert2");
            echo "alert('บันทึกข้อมูลสำเร็จ');";
            echo "window.location='$baseUrl/back/user'";
            echo "</script>";
        }
    }
}