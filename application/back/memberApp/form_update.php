<?php
$db = new database();
$value_user = array(
    "name" => trim($_POST['name']),
    "username" => trim($_POST['username']),
    "password" => trim($_POST['password']),
    "age" => trim($_POST['age']),
    "sex" => trim($_POST['sex']),
    "career" => trim($_POST['career']),
    "email" => trim($_POST['email']),
    "permission" => trim($_POST['permission'])
);
$con_user = "id='{$_GET['id']}'";
$query_user = $db->update("users", $value_user, $con_user);

if($query_user == TRUE){
    header("location:" . $baseUrl . "/back/user");
}
