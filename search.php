<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystylesheet.css">
    <script type="text/javascript" src="geolocation.js"></script>
    <title>Search Page</title>
</head>
<body>
  <?php include 'menu.php'; ?>
    <div id="myBox">
        <h3>Please fill in search fields</h3>
        <form class="search" action="results.html">
            Name:
            <input type="text" name="search" placeholder="Search.."><br>
            <br>Suburb:
            <select name="suburb">
                <option selected>None</option>
                <option value="new farm">New Farm</option>
                <option value="woolloongabba">Woolloongabba</option>
                <option value="Fortitude Valley">Fortitude Valley</option>
            </select><br><br>
            <input type="radio" name="rating" value="0" checked>None
            <input type="radio" name="rating" value="1">1
            <input type="radio" name="rating" value="2">2
            <input type="radio" name="rating" value="3">3
            <input type="radio" name="rating" value="4">4
            <input type="radio" name="rating" value="5">5<br><br>
            <input type="submit" value="Search"><br>
        </form>
    </div>
	<br><button onclick="getLocation()">Get location!</button>
	<p id="status">Click the button to get your coordinates.</p>
	<div id="mapholder"></div>
</body>
</html>