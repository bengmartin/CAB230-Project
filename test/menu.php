<h1>ParkFind</h1>  
<nav class="content"> 
    <ul id="navlist">
		<?php
		//session_start();
		
		//$loggedIn = $_SESSION['user'];
		$home = 0;
		$rego = 1;
		$login = 2;
		$search = 3;
		$logout = 4;
		//echo $_SESSION['user'];
		echo '<li><a href="index.php?page=' . $home . '""><img width="100" height="100" src="images/bench_outline.png"><br />Home</a></li>';	
		echo '<li><a href="index.php?page=' . $rego . '"><img width="100" height="100" src="images/dogwalk_outline.png"><br />Registration</a></li>';
		if (isset($_SESSION['user'])){
			echo '<li><a href="index.php?page=' . $logout . '"><img width="100" height="100" src="images/dogwalk_outline.png"><br />Logout</a></li>';
		} else {
			echo '<li><a href="index.php?page=' . $login . '"><img width="100" height="100" src="images/dogwalk_outline.png"><br />Login</a></li>';
		}
		echo '<li><a href="index.php?page=' . $search . '""><img width="100" height="100" src="images/jogging_outline.png"><br />Search</a></li>';
		?>
	</ul>
  </nav>
