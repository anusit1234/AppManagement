<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new database();
$id = $_GET['user_id'];
    
$sql = "SELECT D1.water as water,
D1.electricity as electricity,
D1.internet as internet,
D1.telephone as telephone,
C1.credit as credit1,
C1.credit_card as credit_card,

C2.credit as credit2,
C2.credit_card as credit_card2,

C3.credit as credit3,
C3.credit_card as credit_card3,

C4.credit as credit4,
C4.credit_card as credit_card4,

C5.credit as credit5,
C5.credit_card as credit_card5


   
FROM (SELECT water,
                        electricity,
                         internet,
                       telephone
                         FROM due_date WHERE user_id='$id') as D1,
                       
            (SELECT t1.credit_card as credit_card,
                           t2.name as credit 
                           FROM due_date t1 INNER JOIN credit_cards_categories t2 on t1.credit_card_id = t2.id WHERE user_id='$id') as C1,
                       
            (SELECT t1.credit_card2 as credit_card,
                           t2.name as credit 
                           FROM due_date t1 INNER JOIN credit_cards_categories t2 on t1.credit_card_id2 = t2.id WHERE user_id='$id') as C2,
                         
            (SELECT t1.credit_card3 as credit_card,
                           t2.name as credit 
                           FROM due_date t1 INNER JOIN credit_cards_categories t2 on t1.credit_card_id3 = t2.id WHERE user_id='$id') as C3,
                         
             (SELECT t1.credit_card4 as credit_card,
                           t2.name as credit 
                           FROM due_date t1 INNER JOIN credit_cards_categories t2 on t1.credit_card_id4 = t2.id WHERE user_id='$id') as C4,
                         
              (SELECT t1.credit_card5 as credit_card,
                           t2.name as credit 
                           FROM due_date t1 INNER JOIN credit_cards_categories t2 on t1.credit_card_id5 = t2.id WHERE user_id='$id') as C5 
";


$query = $db->query($sql);


$arr = array();
    while($rows = mysqli_fetch_assoc($query)){
        $arr = $rows;
    }
    
    echo json_encode($arr);


?>