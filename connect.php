<?php
    $hostname = "172.30.0.1";
	$dbname = "Transactions";
	$userdb = "root";
	$pw = "root";
	
	try {
		$pdo = new PDO ("mysql:host=$hostname;dbname=$dbname","$userdb","$pw");
	} catch (PDOException $e) {
		echo "Failed to get DB handle: " . $e->getMessage() . "\n";
		exit;
	}

	//Iniciar Sesion

	if ( isset($_SESSION) == false) {
		session_start();
	}
?>