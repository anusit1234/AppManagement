<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$query = $db->delete("income_categories", "id='{$_GET['id']}'");
if($query == TRUE){
    header("location:" . $baseUrl . "/back/incomeCategorie");
}else{
    echo "Error! You are not delete income in this categorie.";
}