<?php
    include_once 'connect.php';
    try{
        $pdo->exec("DELETE FROM Test_table");
        echo("Deleted<br/>");
    }catch(Exception $e){
        echo("Failed");
    } 
?>

<a href="normal.php">Normal</a>
<a href="index.php">Transaction</a>