<?php
$db = new database();
$value_user = array(
    "name" => trim($_POST['name']),
    "surname" => trim($_POST['surname']),
    "email" => trim($_POST['email']),
    "password" => trim($_POST['password']),
    "age" => trim($_POST['age']),
    "sex" => trim($_POST['sex']),
    // "career" => trim($_POST['career']),
    "permission" => trim($_POST['permission']),
    "created" => date('Y-m-d')
);
$con_user = "id='{$_GET['id']}'";
$query_user = $db->update("users", $value_user, $con_user);

if($query_user == TRUE){
    // header("location:" . $baseUrl . "/back/user");
    echo "<script>";
    echo "alert('แก้ไขข้อมูลสำเร็จ');";
    echo "window.location='$baseUrl/back/user'";
    echo "</script>";
}
