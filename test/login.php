<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//session_start();

$errors = array();
$rego = 1;
$fieldNames = array('loginEmail', 'loginPassword');

$fail = 'fail';
$success = 'loginSuccess';
$iterator = 0;
//$query = 'INSERT INTO userlist (FirstName, LastName, DOB, Email, Password ) VALUES (?, ?, ?, ?, ?)';


include_once 'functions/forms.php';
include_once 'functions/validation.php';
include_once 'functions/database.php';




$regoFieldsFull = fieldsContainData($_POST, $fieldNames);
if ($regoFieldsFull == true){
	validateLoginEmail($errors, $_POST, $fieldNames[0]);
	validateLoginPassword($errors, $_POST, $fieldNames[1], $fieldNames[0]);
	
	foreach($errors as $boogers){
		$error = $boogers[0];
	}
	if ($errors) {
		validationWindow($fail);
		include 'loginForm.php';		
	} else {
		validationWindow($success);
		$_SESSION['user'] = $_POST['loginEmail'];
		foreach ($fieldNames as $empty){
			$_POST[$empty] = null;
		}
		//include 'loginForm.php';
	}
	
} else {
	include 'loginForm.php';
}


?>