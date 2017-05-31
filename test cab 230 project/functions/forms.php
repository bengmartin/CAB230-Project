<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//session_start();

//creates a popup window notifying success or failure apon form completion.
function validationWindow($determination){
	echo '<script language="javascript">';
	if ($determination == 'fail') echo 'alert("Invalid, correct the following errors")';
	else if ($determination == 'RegSuccess') echo 'alert("Registration Successful")';
	else if ($determination == 'loginSuccess') echo 'alert("User logged in Successfully")';
	else if ($determination == 'ReviewSuccess') echo 'alert("Review added to park")';
	echo '</script>';
}

//function for creating an input field that shows validation errors.
function input_field($errors, $name, $label, $type) {
	echo '<div class="required_field">';
	label($name, $label);
	$value = posted_value($name);
	echo "<input type=\"$type\" id=\"$name\" name=\"$name\" value=\"$value\"/>"; 
	errorLabel($errors, $name);
	echo '</div>';
}

function text_area_input_field($errors, $name, $label, $numRows) {
		echo '<div class="required_field">';
		label($name, $label);
		$value = posted_value($name);
		echo "<textarea rows=\"$numRows\" id=\"$name\" name=\"$name\" value=\"$value\"></textarea>"; 
		errorLabel($errors, $name);
		echo '</div>';
	}

function search_input_field($name, $label, $type) {
	echo '<div class="required_field">';
	label($name, $label);
	$value = posted_value($name);
	echo "<input type=\"$type\" id=\"$name\" name=\"$name\" value=\"$value\"/>";
	echo '</div>';
}

//shows the label for the input field.
function label($name, $label){
	echo "<label for=\"$name\">$label:</label>";
}

//keeps track of the posted value for the input field so when the form refreshes the data is still there.
function posted_value($name){
	if(isset($_POST[$name])){
		return htmlspecialchars($_POST[$name]);
	}
	else{
		return "";
	}
}
//error label function for the input field function.
function errorLabel($errors, $name){
	if (isset($errors[$name])){
		echo "<span id=\"emailError\" class=\"error\"> $errors[$name]</span>"; 
	}
	
}

function select($name, $values) {
echo "<select id=\"$name\" name=\"$name\">";
foreach ($values as $value => $display) {
	$selected = ($value==posted_value($name))?'selected="selected"':'';
	echo "<option $selected value=\"$value\">$display</option>";
}
echo '</select>';

}

//determines if all fields in a form contain data. if it does not it returns false.
function fieldsContainData($field, $fieldNames = array()){
	$bool = true;
	foreach ($fieldNames as $empty){
		if (isset($field[$empty])){
			$bool = true;
		} else {
			$bool = false;
		} 
		return $bool;
	}
}

function formValidation(&$errors, $fieldList, &$FieldName){
	validateName($errors, $_POST, $FieldName['fName']);
	validateName($errors, $_POST, $FieldName['lName']);
	//TODO: need to make a validate for DOB.
	validateEmail($errors, $_POST, $FieldName['email']);
	//validatePassword($errors, $_POST, $FieldName[4], $FieldName[5]);
}

//resets the form to zero upon success.
function formReset($field, $fieldNames = array()){
	foreach ($fieldNames as $empty){
		$field[$empty] = null;
	}
}
?>