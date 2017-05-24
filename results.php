<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystylesheet.css">
    <script type="text/javascript" src="myscript.js"></script>
    <title>Results Page</title>
</head>
<body>
	<?php //include 'menu.php';
		$searchInput = $_POST['search'];
		include 'pdo.php';
		//$result = $pdo->query("SELECT Name FROM cab230-2017-dataset-parks WHERE Name LIKE $searchInput");
		$result = $pdo->query("SELECT Name FROM cab230-2017-dataset-parks WHERE Name LIKE $searchInput");
		//echo '</p>{$_POST['search']}</p>';
		foreach ($result as $Name) {
			echo "<p>{$Name['Name']}</p></br>";
		}
	?>
	<div id = "resultsTable">
		<table>
			<tr>
				<td><a href="result_item.html">result one</a></td>
			</tr>
			<tr>
				<td><a href="result_item_two.html">result two</a></td>
			</tr>
		</table>
	</div>
	
</body>
</html>
