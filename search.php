<html>
<?php
	
	//echo "<div id = 'login'>";
		//echo '<a href="search.php?link=' . $a . '">Search Reviews</a>';
	//echo "</div>";
?>

<head>
    <link rel="stylesheet" type="text/css" href="mystylesheet.css">
    <script type="text/javascript" src="geolocation.js"></script>
    <title>Search Page</title>
</head>
<body>
  <?php  
	
	//include 'menu.php';
  ?>
        <h3>Please fill in search fields</h3>
        <form action="search.php" method="post">
			Name: <input type="text" name="nameSearch" placeholder="Search.."><br></br>
			
			<?php
			//Suburb: <input type="text" name="suburbSearch" placeholder="Search.."><br></br>
			
			error_reporting(E_ALL);
			ini_set('display_errors', 1);
			
			include 'pdo.php';
			$iterator = 0;
			$result = $pdo->query('SELECT DISTINCT Suburb '.'FROM parks '.'WHERE id > 0 ORDER BY Suburb');
			echo '<select name = "Suburbs">';
			echo '<option value="',null,'">','Select Suburb..','</option>';
				foreach ($result as $suburb){
					$iterator++;
					echo '<option value="',$suburb['Suburb'],'">',$suburb['Suburb'],'</option>';
				}
			echo '</select>';
			?>
			</br></br>
			<input type="submit" value="Search"><br></br>
            
        </form>
	
	<?php
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		echo '</br>';
		include 'pdo.php';
		//$iterator = 0;
		//$iterator2 = 0;
		//$array = array();
		
		/* $result = $pdo->query('SELECT DISTINCT Suburb '.'FROM parks '.'WHERE id > 0 ORDER BY Suburb');
		echo '<select name = "Suburbs">';
			foreach ($result as $suburb){
				$iterator++;
				echo '<option value="',$suburb[$iterator],'">',$suburb['Suburb'],'</option>';
			}
		echo '</select>'; */
		
		/* <br><button onclick="getLocation()">Get location!</button>
		<p id="status">Click the button to get your coordinates.</p>
		<div id="mapholder"></div> */

		
		if (isset($_POST['nameSearch'])){
			echo '<div id ="myBox">';
			include 'results.php';
			//echo '</p>{$_POST['$search']}</p>';
			echo '</div>';
		}
	?>
</body>
</html>