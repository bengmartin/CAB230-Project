<html>
	<head>
		<link rel="stylesheet" type="text/css" href="mystylesheet.css">
		<script type="text/javascript" src="myscript.js"></script>
		<title>Registration Page</title>
	</head>
	<body>
	<?php include 'menu.php'; ?>
	<div id="myBox">
		<?php
			$a = 1;
			echo '<form name = "myForm" action="mainForm.php?link=' . $a . '" method="post">';
				
				
				
				include 'inputs.php';
				input_field($errors, 'loginName', 'First Name');
				echo '</br>';
				password_input_field($errors, 'loginPassword', 'Password');
				echo '</br>';
				
				/* User Name: <input type = "text" name = "loginUserName"></br>
				</br>
				Password: <input type = "password" name = "loginPassword"></br>
				</br> */
				
				
				echo '<button type="submit" value="Submit">Submit</button>';
			echo '</form>';
		?>
	</div>
</html>