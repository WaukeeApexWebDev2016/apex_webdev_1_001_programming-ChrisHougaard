

<head></head>
<body style="text-align: center;">
  <h1> Obama's checklist</h1>
  <h3> 31-02-2016</h3>
        <p><input value="Give Michelle a morning kiss"/><input type="checkbox"</p> <br />
  <p><input value="Do the laundry"/><input type="checkbox"</p> <br />
  <p><input value="Talk bad about republicans"/><input type="checkbox"</p> <br />
    <p><input value="Spend time with kids"/><input type="checkbox"</p> <br />
      <p><input value="Spend time with Michelle"/><input type="checkbox"</p> <br />
        <p><input value="Clean up the house"/><input type="checkbox"</p> <br />
          <p><input value="Have the white house cleaned"/><input type="checkbox"</p> <br />
            <p><input value="Go to resturant"/><input type="checkbox"</p> <br />
              <p><input value="Get new suit"/><input type="checkbox"</p> <br />
                <p><input value="Do big speech"/><input type="checkbox"</p> <br />
                  <p><input value="Make fun of secretary of state"/><input type="checkbox"></p> <br
<p><input value="Brush hair of dogs"/><input type="checkbox"</p> <br />
          <p><input value="Make sure secret service men are in bed"/><input type="checkbox"</p> <br />
              <p><input value="Make sure everybody is getting that this A JOKE"/><input type="checkbox"</p> <br />

<p><a href="addform.php">Click here to add an object</a></p>

<p> Here's a calculator to help you calclate! </p>


<form method="GET" action="todolist.php">
<br>
<label>First</label>
<input name="first">

<br>
<label>Second</label>
<input name="second">

<br>

<br>
<label>Operator</label>
<input name="operator">
<br>
<input type="submit">

</form>


<?php

$operator = $_GET['operator'];
if ($operator == 'addition') {
echo $_GET["first"] + $_GET["second"];}
elseif ($operator == 'subtract') {
echo $_GET["first"] - $_GET["second"];}
elseif ($operator == 'multiply') {
echo $_GET['first'] * $_GET['second'];}
elseif ($operator == 'divide') {
echo $_GET['first'] / $_GET['second'];}
elseif ($operator == '');
else {
echo "Invalid variable. Please choose one of these : \n \n
addition, subtract, multiply, divide";
}
?>



                        </body>
