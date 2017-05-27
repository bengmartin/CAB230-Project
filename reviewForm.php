<?php
echo '<div id = "parkForm">';
	echo '<h2>Review Park</h2>';
	echo '<form action="result_item.php?link=' . $id . '" method="post">';
		$numRows = 4;
		echo 'Description:<br>';
		//echo '<textarea name = "reviewDescription" rows="4" cols="50"></textarea><br><br>';
		text_area_input_field($errors, 'reviewDescription', 'Description', $numRows);
		echo 'Rating:';
		echo '<input type="radio" name="rating" value="1" checked>1&nbsp';
		echo '<input type="radio" name="rating" value="2">2&nbsp';
		echo '<input type="radio" name="rating" value="3">3&nbsp';
		echo '<input type="radio" name="rating" value="4">4&nbsp';
		echo '<input type="radio" name="rating" value="5">5<br><br>';
		echo '<button type="submit" value="Submit">Submit</button>';
	echo '</form>';
echo '</div>';


?>