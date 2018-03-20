<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $db = new database();
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
        header("location:" . $baseUrl . "/back/alert");
    }
}