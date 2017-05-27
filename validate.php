<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	include "pdo.php";
	
	
	

	function validateEmail(&$errors, $field_list, $field_name) {
		$iterator = 0;
		
		include "pdo.php";
		
		$result = $pdo->query("SELECT Email FROM userlist WHERE Email='$field_list[$field_name]'");
		
		foreach ($result as $userName) {
			$iterator++;
		}
		
		$pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
		if (!isset($field_list[$field_name])|| empty($field_list[$field_name])) {
			$errors[$field_name] = 'required';
		}
		else if (!preg_match($pattern, $field_list[$field_name])) {
			$errors[$field_name] = 'invalid';
		}
		 else if ($iterator > 0) {
			$errors[$field_name] = 'Email address already in use';
		}
	}
	
	function validateName(&$errors, $field_list, $field_name){	
		$sameName = null;
		$iterator = 0;
		include "pdo.php";
		//username_query($field_list, $field_name);
		$result = $pdo->query("SELECT UserName FROM userlist WHERE UserName='$field_list[$field_name]'");
	
		foreach ($result as $userName) {
			$iterator++;
		}
		$pattern = '/^[a-zA-Z ]*$/';
		if (!isset($field_list[$field_name])|| empty($field_list[$field_name])) {
			$errors[$field_name] = 'required';
		}
		else if (!preg_match($pattern, $field_list[$field_name])){
			$errors[$field_name] = 'invalid';
		}
		else if($iterator > 0){
			$errors[$field_name] = 'User Name already exists';
		}
		
	}
	
	function validatePassword(&$errors, $field_list, $field_name, $field_name2){
		$len = strlen($field_list[$field_name]);
		$min = "8";
		$pattern = '/^[a-zA-Z0-9 ]*$/';
		if (!isset($field_list[$field_name])|| empty($field_list[$field_name])) {
			$errors[$field_name] = 'required';
		}
		else if ($field_list[$field_name] != $field_list[$field_name2] ){
			$errors[$field_name] = 'invalid. Passwords Do Not Match';
		}
		else if ($len < 8 ){
			$errors[$field_name] = 'invalid. Password must be more than 8 characters';
		}
	}
	
	function validateLoginName(&$errors, $field_list, $field_name){	
		//$sameName = null;
		$iterator = 0;
		include "pdo.php";
		//username_query($field_list, $field_name);
		$result = $pdo->query("SELECT UserName FROM userlist WHERE UserName='$field_list[$field_name]'");
		
		foreach ($result as $userName) {
			$iterator++;
		}
		// $pattern = '/^[a-zA-Z ]*$/';
		if (!isset($field_list[$field_name])|| empty($field_list[$field_name])) {
			$errors[$field_name] = 'required';
		}
		/* else if (!preg_match($pattern, $field_list[$field_name])){
			$errors[$field_name] = 'invalid';
		} */
		else if($iterator < 1){
			$errors[$field_name] = 'User Name does not exist';
		}
		
	}
	
	function validateLoginPassword(&$errors, $field_list, $field_name, $enteredUserName){
		$iterator = 0;
		include "pdo.php";
		//username_query($field_list, $field_name);
		$result = $pdo->query("SELECT UserName, Password FROM userlist WHERE Password='$field_list[$field_name]' AND UserName= '$field_list[$enteredUserName]'");
		
		foreach ($result as $userName) {
			$iterator++;
		}
		//$len = strlen($field_list[$field_name]);
		//$min = "8";
		//$pattern = '/^[a-zA-Z0-9 ]*$/';
		if (!isset($field_list[$field_name])|| empty($field_list[$field_name])) {
			$errors[$field_name] = 'required';
		}
		else if($iterator < 1){
			$errors[$field_name] = 'Incorrect Password';
		}
		/* else if ($field_list[$field_name] != $field_list[$field_name2] ){
			$errors[$field_name] = 'invalid. Passwords Do Not Match';
		}
		else if ($len < 8 ){
			$errors[$field_name] = 'invalid. Password must be more than 8 characters';
		} */
	}
	
	function validateDescription(&$errors, $field_list, $field_name){	
		//$sameName = null;
		$iterator = 0;
		$user = $_SESSION['user'];
		$id = $_GET['link'];
		include "pdo.php";
		//username_query($field_list, $field_name);
		$query = 'SELECT * FROM reviews WHERE User= :user AND parkID = :id';
		$result = $pdo->prepare($query);
		$result->bindValue(':user', $user);
		$result->bindValue(':id', $id);
		$result->execute();
		
	
		foreach ($result as $userName) {
			$iterator++;
		}
		
		
		//$pattern = '/^[a-zA-Z ]*$/';
		if (!isset($field_list[$field_name])|| empty($field_list[$field_name])) {
			$errors[$field_name] = 'required';
		}
		/* else if (!preg_match($pattern, $field_list[$field_name])){
			$errors[$field_name] = 'invalid';
		} */
		else if($iterator >= 1){
			$errors[$field_name] = 'User has already made a review for this park';
		}
		
	}
	
	/* 'SELECT Breed, BreedName '.
			'FROM breeds '.
			'WHERE breeds.Breed > 0' */
?>