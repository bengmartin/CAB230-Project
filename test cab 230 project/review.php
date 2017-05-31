<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$errors = array();
$rego = 1;
$parkID = $_GET['link'];
$parkName = $_SESSION['parkName'];
$user = $_SESSION['user'];
$fieldNames = array('reviewDescription', 'reviewRating');

$fail = 'fail';
$success = 'ReviewSuccess';
$iterator = 0;
$query = 'INSERT INTO reviews (parkID, parkName, User, Review, Description ) VALUES (?, ?, ?, ?, ? )';


include_once 'functions/forms.php';
include_once 'functions/validation.php';
include_once 'functions/database.php';




$regoFieldsFull = fieldsContainData($_POST, $fieldNames);
if ($regoFieldsFull == true){
	validateDescription($errors, $_POST, $fieldNames[0]);
	
	if ($errors) {
		validationWindow($fail);
		include 'reviewForm.php';		
	} else {
		validationWindow($success);
		$values = array($parkID, $parkName, $user, $_POST['reviewRating'], $_POST['reviewDescription']);
		runQuery($query, $values);
		//echo  $number;
		foreach ($fieldNames as $empty){
			$_POST[$empty] = null;
		}
		include 'reviewForm.php';
	}
	
} else {
	include 'reviewForm.php';
}
?>