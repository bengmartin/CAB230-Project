<html>
	<head>
	<link rel="stylesheet" type="text/css" href="mystylesheet.css">
	</head>
	<body>
		<?php
		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(session_name(), '', time() - 42000,
				$params["path"], $params["domain"],
				$params["secure"], $params["httponly"]
			);
		}
		session_unset();
		session_destroy();
		$_SESSION = array();
		include 'menu.php';
		echo '<div id = "login">';
			
			//session_start();.
			
		echo '</div>';
		?>
	</body>
</html>