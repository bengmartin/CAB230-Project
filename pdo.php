<?php
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=userregister', 'jayden', '6yxa58pp');
		//$pdo = new PDO('mysql:host=localhost;dbname=n9100288', 'n9100288', '5A6yxa58pp');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//$parks = new PDO('mysql:host=localhost;dbname=userregister', 'jayden', '6yxa58pp')
	}
	catch (PDOException $e) {
		echo $e->getMessage();
	}
	/* function like_query($searchTerm, $column){
		$query = "select * from parks where $column LIKE ?";
		$result = $pdo->prepare($query);
		$result->bindValue(1, "%$searchTerm%", PDO::PARAM_STR);
		$result->execute();
	} */
	/* $searchInput = $_POST['nameSearch'];
	
	$query = "select * from parks where Name LIKE ?";
	$result = $pdo->prepare($query);
	$result->bindValue(1, "%$searchInput%", PDO::PARAM_STR);
	$result->execute(); */
		
	/* function username_query($field_list, $field_name){
		$result = $pdo->query("SELECT UserName FROM userlist WHERE UserName='$field_list[$field_name]'");
	} */
	
?>