<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$query = $db->delete("fixed_expenses_categories", "id='{$_GET['id']}'");
if($query == TRUE){
    header("location:" . $baseUrl . "/back/fixed_expenses_categories");
}else{
    echo "Error! You are not delete income in this categorie.";
}