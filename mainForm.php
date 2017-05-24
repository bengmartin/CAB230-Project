<html>
	<head>
	
	</head>
	<body>
		<?php
		
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		session_start();
		//$a = 1;
		//echo '<a href="loginForm.php?link=' . $a . '">Link 1</a>';
		
		require 'validate.php';
		require "newUser.php";
		
		$errors = array();
		
		if ($_GET['link'] == 1){
			
		}
		if ((isset($_POST['email'])&& isset($_POST['name']) && isset($_POST['password1']))  || (isset($_POST['loginName']) && isset($_POST['loginPassword'])) ){
			if ($_GET['link'] == 2){
				validateEmail($errors, $_POST, 'email');
				validateName($errors, $_POST, 'name');
				validatePassword($errors, $_POST, 'password1', 'password2');
			} else {
				validateLoginName($errors, $_POST, 'loginName');
				validateLoginPassword($errors, $_POST, 'loginPassword', 'loginName');
			}
			
			
			if ($errors) {
				echo '<script language="javascript">';
				echo 'alert("Invalid, correct the following errors")';
				echo '</script>';

				include 'userLogin.php';
				if ($_GET['link'] == 1){
					include 'loginForm.php';
				} else {
					include 'formNew.php';
				}
				
			} 
			else {
				echo '<script language="javascript">';
				echo 'alert("form submitted successfully with no errors")';
				echo '</script>';
				if ($_GET['link'] == 2){
					include 'userLogin.php';
					addNewUser($_POST['name'], $_POST['email'], $_POST['password1']);
					$_POST['name'] = null;
					$_POST['email'] = null;
					$_POST['password1'] = null;
					$_POST['password2'] = null;
					include 'formNew.php';
				} else {
					$_SESSION['user'] = $_POST['loginName']; 
					include 'userLogin.php';
					$_POST['loginName'] = null;
					$_POST ['loginPassword'] = null;
					
					
					include 'loginForm.php';
					if (isset($_SESSION['user'])) echo '<p>booger</p>';					
				}
				
				//echo 'form submitted successfully with no errors'; 
				
				
				
			}
		}
		else {
			include 'userLogin.php';
			
			if ($_GET['link'] == 1){

				include 'loginForm.php';
				if (isset($_SESSION['user'])) echo '<p>booger</p>';
			} else {
				include 'formNew.php';
			}
			//include 'formNew.php';
			//include 'loginForm.php';
		}
		?>


	</body>
</html>