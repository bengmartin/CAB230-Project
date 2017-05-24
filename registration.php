<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystylesheet.css">
    <script type="text/javascript" src="myscript.js"></script>
    <title>Registration Page</title>
</head>
<body>
  <?php include 'menu.php'; ?>
    <div id="myBox">
        <form name="myForm" action = "newUser.php" method = "post" class="search" onsubmit="validateForm()">
            <br>Username:
            <input type="text" name="username" maxlength="15"><br>
            <br>Email Address:
            <input type="text" name="email"><br>
            <br>Password:
            <input type="password" name="pass1" id="pass1"><br>
            <br>Confirm Password:
            <input type="password" name="pass2" id="pass2"><br>
            <br><input type="submit" value="Register">
        </form>
    </div>
</html>