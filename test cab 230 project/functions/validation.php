<?php
include_once 'functions/database.php';

function validateEmail(&$errors, $field_list, $field_name) {
	$query = "SELECT Email FROM userlist WHERE Email = ? ";
	$values = array($field_list[$field_name]);
	$result = runQuery ($query, $values);
	$iterator = 0;	
	$pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
	
	foreach ($result as $email) {
		$iterator++;
	}
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
	$pattern = '/^[a-zA-Z ]*$/';
	if (!isset($field_list[$field_name])|| empty($field_list[$field_name])) {
		$errors[$field_name] = 'required';
	}
	else if (!preg_match($pattern, $field_list[$field_name])){
		$errors[$field_name] = 'invalid';
	}	
}

function validateDOB(&$errors, $field_list, $field_name){
	$pattern = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
	if (!isset($field_list[$field_name])|| empty($field_list[$field_name])) {
		$errors[$field_name] = 'required';
	}
	else if (!preg_match($pattern, $field_list[$field_name])){
		$errors[$field_name] = 'invalid';
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

function validateLoginEmail(&$errors, $field_list, $field_name){
	$query = "SELECT Email FROM userlist WHERE Email = ? ";
	$values = array($field_list[$field_name]);
	$result = runQuery ($query, $values);
	$iterator = 0;	
	$pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
	
	foreach ($result as $email) {
		$iterator++;
	}
	if (!isset($field_list[$field_name])|| empty($field_list[$field_name])) {
		$errors[$field_name] = 'required';
	}
	else if (!preg_match($pattern, $field_list[$field_name])) {
		$errors[$field_name] = 'invalid';
	}
	else if($iterator < 1){
		$errors[$field_name] = 'Email does not exist';
	}
	
}

function validateLoginPassword(&$errors, $field_list, $field_name, $enteredUserName){
	$query = "SELECT Email, Password FROM userlist WHERE Password = ? AND Email = ?";
	$values = array($field_list[$field_name], $field_list[$enteredUserName]);
	$result = runQuery ($query, $values);
	$iterator = 0;
	
	foreach ($result as $password) {
		$iterator++;
	}
	if (!isset($field_list[$field_name])|| empty($field_list[$field_name])) {
		$errors[$field_name] = 'required';
	}
	else if($iterator < 1){
			$errors[$field_name] = 'Incorrect Password';
		}
}

function validateDescription(&$errors, $field_list, $field_name){
	$user = $_SESSION['user'];
	$parkName = $_SESSION['parkName'];
	$query = 'select * from reviews where user = ? AND parkName = ?';
	$values = array($user, $parkName);
	$result = runQuery($query, $values);
	$iterator = 0;
	
	foreach ($result as $User) {
		$iterator++;
	}
	
	if (!isset($field_list[$field_name])|| empty($field_list[$field_name])) {
		$errors[$field_name] = 'required';
	}
	else if ($iterator >= 1) {
		$errors[$field_name] = 'User has aleady left a review for this park';
	}
}
?>