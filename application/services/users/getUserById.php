<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();

// $id = 3 ;
$email = $_GET['email'];
$password = $_GET['password'];
    
$sql = "SELECT * FROM users where email='$email' and password='$password' and permission='member'";

$query = $db->query($sql);

$num = mysqli_num_rows($query);
// echo $num;

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
    
    


?>