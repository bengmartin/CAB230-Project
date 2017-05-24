<html>
	<head>
	<link rel="stylesheet" type="text/css" href="mystylesheet.css">
	</head>
	<body>
		
			<?php
			//session_start();
			echo '<div id = "login">';
				error_reporting(E_ALL);
				ini_set('display_errors', 1);
				$a = 1;
				if (isset($_SESSION['user'])){
					echo '<a href="userLogout.php?link=' . $a . '">Logout</a>';
				} else {
					echo '<a href="mainForm.php?link=' . $a . '">Login</a>';
				}
				
					
				//if ($_SESSION['loggedIn'] == true) 
			echo '</div>';	
			?>
			
		
	</body>
</html>
