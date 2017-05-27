<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystylesheet.css">
    <script type="text/javascript" src="myscript.js"></script>
    <title>Result One</title>
</head>
<body>
<?php include 'menu.php'; ?>
<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'pdo.php';
include 'validate.php';
include 'inputs.php';
$errors = array();

if(isset($_POST['reviewDescription']) && isset($_POST['rating'])){
	validateDescription($errors, $_POST, 'reviewDescription');
	if ($errors) {
		echo '<script language="javascript">';
		echo 'alert("Invalid, correct the following errors")';
		echo '</script>';
		echo '<div id = "myBox">';
			include 'resultItemInfo.php';
		echo '</div>';
		echo '<br>';
		
		echo '<div id = "myBox">';
			include 'parkReviews.php';
		echo '</div>';
		
		if (isset($_SESSION['user'])){
			echo '<div id = "myBox">';
				include 'reviewForm.php';
			echo '</div>';
		}
	} else {
		$parkID = $_GET['link'];
		$parkName = $_SESSION['name'];
		$User = $_SESSION['user'];
		$Review = $_POST['rating'];
		$Description = $_POST['reviewDescription'];
		echo '<script language="javascript">';
		echo 'alert("form submitted successfully with no errors")';
		echo '</script>';
		echo '<div id = "myBox">';
			include 'resultItemInfo.php';
		echo '</div>';
			
		echo '<br>';
		
		echo '<div id = "myBox">';
			include 'parkReviews.php';
		echo '</div>';
		
		if (isset($_SESSION['user'])){
			echo '<div id = "myBox">';
				include 'reviewForm.php';
			echo '</div>';
		}
		include 'newReview.php';
		//echo $_GET['link'];
		addReview($parkID, $parkName, $User, $Review, $Description);
	}
	//include 'newReview.php';
} else {
	echo '<div id = "myBox">';
		include 'resultItemInfo.php';
	echo '</div>';
		
	echo '<br>';
	
	echo '<div id = "myBox">';
		include 'parkReviews.php';
	echo '</div>';
	
	if (isset($_SESSION['user'])){
		echo '<div id = "myBox">';
			include 'reviewForm.php';
		echo '</div>';
	}
	
}


	
	
	//echo 'booger';
	/* <p><b>Location:</b>&nbsp; cnr Smith Street and Jones Street. South Side</p>
	
	<p><b>Description:</b> &nbsp; Kalinga Park is loved for its abundance of space. The playground 
	features a large sandpit, creative play elements and sculptured creatures inspired by the local 
	flora and fauna of the Kedron Brook catchment. There is rubber matting and under-surfacing under
	play equipment and wide pathways make access easy for wheelchairs and prams. Other play facilities 
	include a multi-user spinner, two new spinners, one rocker and two high-back swing seats.
	
	<p><b>Size:</b>&nbsp; 15,000 square meters.</p>
	
	<p><b>Features:</b> &nbsp; Dog off-leash area facilities - picnic shelter, bench/table, bench seats, 
	bubbler, tap, dog water, poo bin, rubbish bin, lights</p>
	<h3>Reviews</h3>
	<p><b>Reviewer:</b>&nbsp; HoboMaster3000</p>
	<p><b>rating:</b> &nbsp; 5 stars</p>
	<p><b>Review:</b> &nbsp; The benches are very hobo friendly I sleep here everynight and I've only 
	been mugged and beaten twice in the past 5 years! definitely reccomend!</p>
	</br>
	<p><b>Reviewer:</b>&nbsp; CrazyDogLady66</p>
	<p><b>rating:</b> &nbsp; 4 stars</p>
	<p><b>Review:</b> &nbsp; The off Leash Area is a little too small. It does not accomodate all 173 
	of my dogs and muffin IV keeps jumping the fence. other than that the park is beautiful!</p> */

?>
	
	
	
	
</body>
</html>