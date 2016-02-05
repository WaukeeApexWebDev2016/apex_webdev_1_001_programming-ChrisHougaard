
<head></head>
<body style="text-align: center;">
<h1>Enter your username & password</h1>

<br />
<br />
<form method="GET" action="Login_Page.php">
<p>Username / <input name="username" value="Input Username here"/></p>
<p>Password / <input name ="password" type="password" value="#####"/></p>
<p><input type="submit"></p>
<p><a href="todolist.html"><input type="submit" value="Submit" /></a></p>
</form>
</body>

<?php

$username = $_GET['username'];
$password = $_GET['password'];

if ($username == "admin" && $password == "chrisawesome") {
 header("Location: addform.php");}
 elseif ($username == "Spencer" && $password == "itsaboy") {
header("location: addform.php");}
elseif ($username == "Herzberg" && $password == "itsgirl") {
header("location: addform.php");}
elseif ($username == "Palmer" && $password == "letsparty") {
header("location: addform.php");}
elseif ($username == "" && $password == "") {
echo "Input username and password";
}
else {
echo "invalid username. You are not an admin";
}

 ?>
