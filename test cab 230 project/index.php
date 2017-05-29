<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystylesheet.css">
    <script type="text/javascript" src="myscript.js"></script>
    <title>Park Finder</title>
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include 'menu.php';
include 'functions/layout.php';

$webPage = $_GET['page'];

if ($webPage == 0) echo '<h1>Home</h1>';
if ($webPage == 1) echo '<h1>Registration</h1>';
if ($webPage == 2) echo '<h1>Login</h1>';
if ($webPage == 3) echo '<h1>Search</h1>';

if ($webPage == 1) includeInDiv('registration.php', 'myBox');
if ($webPage == 2) includeInDiv('login.php', 'myBox');
if ($webPage == 3){
	includeInDiv('search.php', 'myBox');
	echo '<br>';
	if (isset($_POST['nameSearch'])){
		includeInDiv('results.php', 'myBox');
	}
} 
if ($webPage == 4) includeInDiv('logout.php', 'myBox');
if ($webPage == 5) includeInDiv('resultItem.php', 'myBox');
if ($webPage == 5 && isset($_SESSION['user'])) includeInDiv('reviewForm.php','myBox');

?>
</body>
</html>