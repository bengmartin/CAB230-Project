<?php
	try{
		//$pdo = new PDO('mysql:host=localhost;dbname=userregister', 'jayden', '6yxa58pp');
		$pdo = new PDO('mysql:host=localhost;dbname=n9100288', 'n9100288', '5A6yxa58pp');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//$parks = new PDO('mysql:host=localhost;dbname=userregister', 'jayden', '6yxa58pp')
	}
	catch (PDOException $e) {
		echo $e->getMessage();
	}
		
	/* function username_query($field_list, $field_name){
		$result = $pdo->query("SELECT UserName FROM userlist WHERE UserName='$field_list[$field_name]'");
	} */
	
?>