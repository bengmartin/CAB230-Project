<?php

include_once 'functions/forms.php';

$search = 3;

echo '<br>';
echo '<form name = "myForm" action = "index.php?page=' . $search . '" method="post">';
search_input_field('nameSearch', 'Park Name', 'text');
echo '<br>';
echo '<input type="submit" value="Search">';
echo '</form>';
echo '<br>';
?>