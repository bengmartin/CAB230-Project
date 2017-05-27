<?php
$id = $_GET['link'];
$query = "select * from parks where id = :id";
$result = $pdo->prepare($query);
$result->bindValue(':id', $id);
$result->execute();

foreach ($result as $field){
	$parkName = $field['Name'];
	$_SESSION['name'] = $parkName;
	$parkStreet = $field['Street'];
	$parkSuburb = $field['Suburb'];
}

//$parkName = $result['Name'];

echo '<div id = "parkInfo">';
	echo "<h1>$parkName</h1>";
	echo "<h3>Address: $parkStreet</h3>";
	echo "<h3>Suburb: $parkSuburb</h3>";
	//echo $_SESSION['user'];
echo '</div>';
?>