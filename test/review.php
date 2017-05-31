<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$errors = array();
$rego = 1;
$fieldNames = array('fName', 'lName', 'DOB', 'email', 'password1', 'password2');

$fail = 'fail';
$success = 'RegSuccess';
$iterator = 0;
$query = 'INSERT INTO userlist (FirstName, LastName, DOB, Email, Password ) VALUES (?, ?, ?, ?, ?)';


include_once 'functions/forms.php';
include_once 'functions/validation.php';
include_once 'functions/database.php';




$regoFieldsFull = fieldsContainData($_POST, $fieldNames);
if ($regoFieldsFull == true){
	validateName($errors, $_POST, $fieldNames[0]);
	validateName($errors, $_POST, $fieldNames[1]);
	validateDOB($errors, $_POST, $fieldNames[2]);
	validateEmail($errors, $_POST, $fieldNames[3]);
	validatePassword($errors, $_POST, $fieldNames[4], $fieldNames[5]);
	
	foreach($errors as $boogers){
		$error = $boogers[0];
	}
	if ($errors) {
		validationWindow($fail);
		include 'registrationForm.php';		
	} else {
		validationWindow($success);
		$values = array($_POST['fName'], $_POST['lName'], $_POST['DOB'], $_POST['email'], $_POST['password1']);
		runQuery($query, $values);
		//echo  $number;
		foreach ($fieldNames as $empty){
			$_POST[$empty] = null;
		}
		include 'registrationForm.php';
	}
	
} else {
	include 'registrationForm.php';
}
?>