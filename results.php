<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystylesheet.css">
    <script type="text/javascript" src="myscript.js"></script>
    <title>Results Page</title>
</head>
<body>
	<?php //include 'menu.php';
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		
		$nameSearchInput = $_POST['nameSearch'];
		$suburbSearchInput = $_POST['Suburbs'];
		$searchTerm = 'Name';
		$iterator = 0;
		include 'pdo.php';
		//$query = "select * FROM cab230-2017-dataset-parks WHERE ? LIKE ?";
		//$result = $pdo->prepare($query);
		//$result->bindValue(1, $searchTerm, PDO::PARAM_INT);
		//$result->bindValue(2, "%$searchInput%", PDO::PARAM_STR);
		//$result->execute();
		
		
		if ($nameSearchInput != null && $suburbSearchInput != null){
			$query = "select * from parks where Name LIKE ? AND Suburb = ?";
			$result = $pdo->prepare($query);
			$result->bindValue(1, "%$nameSearchInput%", PDO::PARAM_STR);
			$result->bindValue(2, $suburbSearchInput, PDO::PARAM_STR);
			$result->execute();
		}
		else if ($nameSearchInput != null){
			$query = "select * from parks where Name LIKE ?";
			$result = $pdo->prepare($query);
			$result->bindValue(1, "%$nameSearchInput%", PDO::PARAM_STR);
			//$result->bindValue(2, "%$suburbSearchInput%", PDO::PARAM_STR);
			$result->execute();
		}
		
		else if ($suburbSearchInput != null){
			$query = "select * from parks where Suburb = :suburb";
			$result = $pdo->prepare($query);
			//$result->bindValue(1, "%$nameSearchInput%", PDO::PARAM_STR);
			$result->bindValue(':suburb', $suburbSearchInput, PDO::PARAM_STR);
			$result->execute();
			//echo $suburbSearchInput;
		}
		
		
		
		
		foreach ($result as $Name) {
			$park_id = $Name['id'];
			echo '<table>';
				echo '<tr>';
					echo "<td><a href='result_item.php?link=$park_id'>{$Name['Name']}</a></td>";
					echo "<td>{$Name['Street']}</td>";
					echo "<td>{$Name['Suburb']}</td>";
					//echo "<td>$park_id</td>";
				echo '</tr>';
			echo '</table>';
			
		}
		echo $suburbSearchInput;
	?>

	
</body>
</html>
