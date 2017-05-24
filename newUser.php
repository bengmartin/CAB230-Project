<?php
	function addNewUser($UserName, $Email, $Password){
		include "pdo.php";
		
		try{
			
			
			$stmt = $pdo->prepare('INSERT INTO userlist (UserName, Email, Password )
										VALUES (:UserName, :Email, :Password )');
			$stmt->bindValue(':UserName', $UserName);
			$stmt->bindValue(':Email', $Email);
			$stmt->bindValue(':Password', $Password);
			$stmt->execute();
		}
		catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	//$UserName = $_POST["username"];
	//$Email = $_POST["email"];

	
	
	
	
?>