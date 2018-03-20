<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$query = $db->delete("admin", "id='{$_GET['id']}' AND id != '1'");
if($query == TRUE){
    header("location:" . $baseUrl . "/back/alert");
}else{
    echo "error";
}
