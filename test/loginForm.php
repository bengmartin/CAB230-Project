<?php
$login = 2;
echo '<form name = "myForm" action = "index.php?page=' . $login . '" method = "post">';
	echo '<br>';

	input_field($errors, 'loginEmail', 'Email Adress', 'text');
	echo '<br>';
	input_field($errors, 'loginPassword', 'Password', 'password');
	echo '<br>';
	echo '<button type="submit" value="Submit">Submit</button>';
	echo '<br><br>';
echo '</form>';

?>