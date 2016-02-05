<head></head>
<body>
<h1 style="text-align: center;">Welcome to my page!</h1>
<p>
  This page is developed for the specific perpose, of explaning you what this app does <br />
  The purpose of the app, is to hide secret information about the president's todo list <br />
  as well as other minor things.<br />
  If you get access, you will have the opportunity to add things to this list <br />
  If you mr. President, are watching, we wish you a good day!
  <br />
  <br />
Fill the form to continue
</p>
<p>
  What is the next page called? (login page)
  <form method="GET" action="about.php">
<input name="nextpage" value="Input page name here ">
<input type="submit">
</form>
</p>

<?php
$nextpage = $_GET['nextpage'];

if ($nextpage == "login page") {
header("location: Login_Page.php");
}
elseif ($nextpage == "");
else {
  echo "Try again"; 
}


 ?>
