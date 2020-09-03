<?php
    include_once 'connect.php';
    $errors = 0;
    try{
        $time_start = microtime(true);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->beginTransaction();
        for($i = 0 ; $i < 1000 ; $i++){
            $a = rand(1, 1000);
            $b = rand(1, 1000);
            $c = rand(1, 1000);
            if($a >= 1000){
                $a = $a . "a";
                $errors++;
            }
            $pdo->exec("INSERT INTO Test_table(prim, sec, ter) VALUES($a, $b, $c)");
            
        }
        $pdo->commit();
        $time_end = microtime(true);
        $timee = $time_end - $time_start;
        echo "Time elapsed: " . round($timee, 2) . " seconds<br/>";
    }catch(Exception $e){
        $pdo->rollBack();
        echo("Failed with $errors errors<br/>");
    }
?>

<a href="deleteall.php">Restart</a>