<?php
include_once 'functions/database.php';
include_once 'functions/layout.php';
include 'map.php';

$likeSearchVariable = $_POST['nameSearch'];
$values = array("%$likeSearchVariable%");
$query = "select * from parks where Name LIKE ?";
$resultItem = 5;

$result = runQuery ($query, $values);

foreach ($result as $Name) {
			$park_id = $Name['id'];
			echo '<table>';
				echo '<tr>';
					echo "<td><a href='index.php?page=$resultItem&link=$park_id'>{$Name['Name']}</a></td>";
					echo "<td>{$Name['Street']}</td>";
					echo "<td>{$Name['Suburb']}</td>";
				echo '</tr>';
			echo '</table>';
            
			
		}

?>