<?php
    include_once 'connect.php';
    $errors = 0;
    try{
        $time_start = microtime(true);
        for($i = 0 ; $i < 1000 ; $i++){
            $a = rand(1, 1000);
            $b = rand(1, 1000);
            $c = rand(1, 1000);
            if($a >= 900){
                $a = $a . "a";
                $errors++;
            }
            $pdo->exec("INSERT INTO Test_table(prim, sec, ter) VALUES($a, $b, $c)");
            
        }
        $time_end = microtime(true);
        $timee = $time_end - $time_start;
        echo "Time elapsed: " . round($timee, 2) . " seconds<br/>";
        echo "Ammount of errors: $errors<br/>";
    }catch(Exception $e){
        echo("Failed with $errors errors<br/>");
    }
?>

<a href="deleteall.php">Restart</a>