<?php
function includeInDiv($include, $divID){
	echo "<div id = $divID>";
		include $include;
	echo '</div>';
}
?>