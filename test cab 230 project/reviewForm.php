<?php
include_once 'functions/forms.php';
//include_once 'review.php';
$id = $_GET['link'];
$result = 5;
echo '<h2>Review Park</h2>';
//echo '<form action="index.php?page = ' . $result . '&link = ' . $id . '" method='post'>';
echo '<form action = "index.php?page='.$result.'&link='.$id.'" method = "post">';
	$numRows = 4;
	echo 'Description:<br>';
	//echo '<textarea name = "reviewDescription" rows="4" cols="50"></textarea><br><br>';
	text_area_input_field($errors, 'reviewDescription', 'Description', $numRows);
	echo 'Rating:';
	echo '<input type="radio" name="reviewRating" value="1" checked>1&nbsp';
	echo '<input type="radio" name="reviewRating" value="2">2&nbsp';
	echo '<input type="radio" name="reviewRating" value="3">3&nbsp';
	echo '<input type="radio" name="reviewRating" value="4">4&nbsp';
	echo '<input type="radio" name="reviewRating" value="5">5<br><br>';
	echo '<button type="submit" value="Submit">Submit</button>';
echo '</form>';
?>