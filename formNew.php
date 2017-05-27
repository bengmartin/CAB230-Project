<html>
	<head>
		<link rel="stylesheet" type="text/css" href="mystylesheet.css">
		<script type="text/javascript" src="myscript.js"></script>
		<title>Registration Page</title>
	</head>
	<body>
	<?php 
	
	
	include 'menu.php';
	//$loginBool = false;
	//echo '<button name = "userLogin" onclick = "switchForm($loginBool)" value = "Login">Login</button>';
	
	
	?>
	<div id="myBox">
		<?php
		//$url = "mainForm.php?link=" . 2;
		$b = 2;
		echo '<form name = "myForm" action="mainForm.php?link=' . $b . '" method="post">';
					
			
			error_reporting(E_ALL);
			ini_set('display_errors', 1);
			//include 'formSwitch.php';
			
			
			
			
			include "inputs.php";
			//require "savedValues.php";

			input_field($errors, 'name', 'First Name');
			echo "</br>";
			input_field($errors, 'email', 'Email');
			echo "</br>";
			password_input_field($errors, 'password1', 'Password');
			echo "</br>";
			password_input_field($errors, 'password2', 'Confirm Password');

			
			
			
			
			
			//$regName = $_POST['name'];
			//$regEmail = $_POST['Email'];
			
			
			
			/* $months = array('None' => 'Select...', 1 => 'Jan', 2 => 'Feb', 3 => 'Mar',
			4 =>'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug',
			9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
			select('month', $months); */
			
			
			
			
			echo '<button type="submit" value="Submit">Submit</button>';
		echo '</form>';
		?>
	</div>
</html>