
<head></head>

<body style="text-align: center;">

<h1>Add form</h1>
<h2>Only democrats can add to the list </h2>

<h3>Name</h3>
<form method="GET" action="addform.php">
<p><input name="name" value="Example: Barack Obama"></p>
<h3>Address</h3>
<p><input name="address"value="Example: White House"></p>
<h3>Social Security</h3>
<p><input name="socialsecurity" value="Example: 040619612920"></p>
<h3>Wife's name</h3>
<p><input name="wife" value="Example: Michelle Obama"></p>
<h3>Dog's name</h3>
<p><input name="dog" value="Example: Wuffi"></p>
<h3>Birthday</h3>
<p><input name="birthday" value="Example: 04/06/1961"></p>
<h3>Preposal to add</h3>
<p><input name="preposal" value="Example: Clean the house"></p>
<p><a href="about.html"><input type="submit"></a></p>
</body>

<?php

$socialsecurity = $_GET['socialsecurity'];
$wife = $_GET['wife'];
$name = $_GET['name'];
$address = $_GET['address'];
$birthday = $_GET['birthday'];
$preposal = $_GET['preposal'];
$dog = $_GET['dog'];

if ($socialsecurity == "" && $wife == "" && $name == "" && $address == "" && $birthday == "" && $preposal == "" && $dog == "") {
echo "Insert information";
}
elseif ($socialsecurity == "" && $wife == "michelle" && $name == "Obama" && $address == "the white house" && $birthday == "" && $preposal == "" && $dog == "") {
  header("Location: todolist.php");}
else {
  echo "Your answer has been submitted";
}

 ?>
