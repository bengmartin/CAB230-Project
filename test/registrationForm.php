<?php
echo '<form name = "myForm" action = "index.php?page=' . $rego . '" method = "post">';
	echo '<br>';
	input_field($errors, 'fName', 'First Name', 'text');
	echo '<br>';
	input_field($errors, 'lName', 'Last Name', 'text');
	echo '<br>';
	input_field($errors, 'DOB', 'D.O.B (dd/mm/yyyy)', 'text');
	echo '<br>';
	input_field($errors, 'email', 'Email Adress', 'text');
	echo '<br>';
	input_field($errors, 'password1', 'Password', 'password');
	echo '<br>';
	input_field($errors, 'password2', 'Confirm Password', 'password');
	echo '<br>';
	echo '<button type="submit" value="Submit">Submit</button>';
	echo '<br><br>';
echo '</form>';

?>