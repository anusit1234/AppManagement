<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

$data = file_get_contents("php://input");   //รับค่าจาก ionic

$objData = json_decode($data);              //แปลง json เป็น object

$name = $objData->data->name;
$surname = $objData->data->surname;
$email = $objData->data->email;
$password = $objData->data->password;
$age = $objData->data->age;
$sex = $objData->data->sex;
$career = $objData->data->career;
$permission = "member";
$status = 1;
    

// $db = new database();
    $sql = "SELECT name FROM users where email='$email' and permission='member'";
    $query = $db->query($sql);
    $rows = $db->rows($query);

    if($rows > 0){
        echo json_encode(null);
    }
    else{
        $value_user = array(
            "name" => $name,
            "surname" => $surname,
            "email" => $email,
            "password" => $password,
            "age" => $age,
            "sex" => $sex,
            "career" => $career,
            "permission" => $permission,
            "status" => $status,
            "created" => date('Y-m-d')
        );
        $query_user = $db->insert("users", $value_user);

        if ($query_user == TRUE) {

            $sql = "SELECT * FROM users where email='$email' and password='$password' and permission='member'";
            $query = $db->query($sql);

            $num = mysqli_num_rows($query);

            $arr = array();
            if($num > 0){
                while($rows = mysqli_fetch_assoc($query)){
                    $arr[] = $rows;
                }
                echo json_encode($arr[0]);
            }
            else{
                echo json_encode(null);
            }
        }
    }

?>