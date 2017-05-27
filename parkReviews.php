<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'pdo.php';
$id = $_GET['link'];
$query = "select * from reviews where parkID = :id";
$result = $pdo->prepare($query);
$result->bindValue(':id', $id );
//$result->bindValue(2, "%$suburbSearchInput%", PDO::PARAM_STR);
$result->execute();
//echo 'booger';

foreach ($result as $field){
	$user = $field['User'];
	$description = $field['Description'];
	$Review = $field['Review'];
	
	echo "<h2>Review by: $user</h2>";
	echo "<h2>FeedBack: $description</h2>";
	echo "<h2>Scored: $Review out of 5</h2>";

}



?>