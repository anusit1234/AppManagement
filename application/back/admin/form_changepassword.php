<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new database();
    $option_uw = array(
        "table" => "admin",
        "fields" => "password",
        "condition" => "id='{$_POST['id']}'"
    );
    $query_uw = $db->select($option_uw);
    $rs_uw = $db->get($query_uw);
    if ($rs_uw['password'] == trim(salt_pass($_POST['oldpassword']))) {
        $value_pw = array(
            "password" => trim(salt_pass($_POST['pass']))
        );
        $query_pw = $db->update("admin", $value_pw, "id='{$_POST['id']}'");

        if ($query_pw == TRUE) {
            header("location:" . $baseUrl . "/back/alert");
        }
    }else{
        $_SESSION[_ss . 'msg_result'] = TRUE;
        header("location:" . $baseUrl . "/back/admin/changepassword");
    }
    
}