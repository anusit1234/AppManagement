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
    

// $db = new database();
    // $sql = "SELECT name FROM users where email='$email' and permission='member'";
    // $query = $db->query($sql);
    // $rows = $db->rows($query);

    // if($rows > 0){
    //     echo json_encode(null);
    // }
    // else{
        $value_user = array(
            "name" => $name,
            "surname" => $surname,
            "email" => $email,
            "password" => $password,
            "age" => $age,
            "sex" => $sex,
            "career" => $career,
            // "permission" => $permission,
            "created" => date('Y-m-d')
        );
        $query_user = $db->update("users", $value_user, "user_id='$user_id' ");

        if ($query_user == TRUE) {

            if ($query_income == TRUE) {

                echo json_encode("success");
            }
            else{
                echo json_encode(null);
            }
        }

?>