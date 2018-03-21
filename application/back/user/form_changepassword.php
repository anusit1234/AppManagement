<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new database();
    $option_uw = array(
        "table" => "users",
        "fields" => "password",
        "condition" => "id='{$_POST['id']}'"
    );
    $query_uw = $db->select($option_uw);
    $rs_uw = $db->get($query_uw);
    if ($rs_uw['password'] == trim(salt_pass($_POST['oldpassword']))) {
        $value_pw = array(
            "password" => trim(salt_pass($_POST['pass']))
        );
        $query_pw = $db->update("users", $value_pw, "id='{$_POST['id']}'");

        if ($query_pw == TRUE) {
            echo "<script>";
            // header("location:" . $baseUrl . "/back/alert2");
            echo "alert('เปลี่ยนรหัสผ่านสำเร็จ');";
            echo "window.location='$baseUrl/back/user'";
            echo "</script>";
        }
    }else{
        $_SESSION[_ss . 'msg_result'] = TRUE;
        // header("location:" . $baseUrl . "/back/user/changepassword");
        echo "<script>";
            // header("location:" . $baseUrl . "/back/alert2");
            echo "alert('รหัสผ่านเก่าไม่ถูกต้อง');";
            echo "window.location='$baseUrl/back/user/changepassword'";
            echo "</script>";
    }
    
}