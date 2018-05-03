<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

$data = file_get_contents("php://input");   //รับค่าจาก ionic

$objData = json_decode($data);              //แปลง json เป็น object

$user_id = $objData->data->user_id;
$name = $objData->data->name;
$surname = $objData->data->surname;
$email = $objData->data->email;
$password = $objData->data->password;
$age = $objData->data->age;
$sex = $objData->data->sex;
$career = $objData->data->career;
$permission = "member";
    

    $value_user = array(
        "name" => $name,
        "surname" => $surname,
        "email" => $email,
        "password" => $password,
        "age" => $age,
        "sex" => $sex,
        "career" => $career,
        "permission" => $permission,
        "created" => date('Y-m-d')
    );

        $query_user = $db->update("users", $value_user, "id='$user_id' ");

        if ($query_user == TRUE) {

            echo json_encode("success");
        }
        else{
            echo json_encode(null);
        }


?>