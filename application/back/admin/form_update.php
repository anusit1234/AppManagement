<?php
$db = new database();
$value_user = array(
    "name" => trim($_POST['name']),
    "username" => trim($_POST['username']),
    "email" => trim($_POST['email']),
    "phone" => trim($_POST['phone']),
    "address" => trim($_POST['address']),
);
$con_user = "id='{$_GET['id']}'";
$query_user = $db->update("admin", $value_user, $con_user);

if($query_user == TRUE){
    header("location:" . $baseUrl . "/back/alert");
}
