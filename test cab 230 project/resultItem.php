<?php
include_once 'functions/database.php';

$query = "select * from parks where id = ?";
$values = array($_GET['link']);
$result = runQuery ($query, $values);
foreach ($result as $parkInfo){
	$parkName = $parkInfo['Name'];
	$parkStreet = $parkInfo['Street'];
	$parkSuburb = $parkInfo['Suburb'];
}

echo '<table>';
	echo '<tr>';
		echo "<td>$parkName</td>";
	echo '</tr>';
	echo '<tr>';
		echo "<td>$parkStreet</td>";
	echo '</tr>';
	echo '<tr>';
		echo "<td>$parkSuburb</td>";
	echo '</tr>';
echo '</table>';
?>