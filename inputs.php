<?php	
	function input_field($errors, $name, $label) {
		echo '<div class="required_field">';
		label($name, $label);
		$value = posted_value($name);
		echo "<input type=\"text\" id=\"$name\" name=\"$name\" value=\"$value\"/>"; 
		errorLabel($errors, $name);
		echo '</div>';
	}
	
	function password_input_field($errors, $name, $label) {
		echo '<div class="required_field">';
		label($name, $label);
		$value = posted_value($name);
		echo "<input type=\"password\" id=\"$name\" name=\"$name\" value=\"$value\"/>"; 
		errorLabel($errors, $name);
		echo '</div>';
	}

	
	function label($name, $label){
		echo "<label for=\"$name\">$label:</label>";
	}
	
	function posted_value($name){
		if(isset($_POST[$name])){
			return htmlspecialchars($_POST[$name]);
		}
		else{
			return "";
		}
	}
	
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
	
	
?>