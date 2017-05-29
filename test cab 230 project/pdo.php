<?php
	try{
		//$pdo = new PDO('mysql:host=localhost;dbname=n9100288', 'n9100288', '5A6yxa58pp');
		$pdo = new PDO('mysql:host=localhost;dbname=userregister', 'jayden', '6yxa58pp');
		//$pdo = new PDO('mysql:host=127.0.0.1;dbname=cab230-project', 'bengmartin', 'Kruger117');
	}
	catch (PDOException $e) {
		echo $e->getMessage();
	}
	
?>