<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystylesheet.css">
    <script type="text/javascript" src="myscript.js"></script>
    <title>Index Page</title>
</head>
<body>
  <?php include 'menu.php'; 
  //include 'search.php';
  ?>
  <div id="myBox">
    <h2>Welcome</h2>
	<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	include 'result_item.php';
	//include 'search.php';
	?>
  </div>
</body>
</html>