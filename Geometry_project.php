<?php

//Hey! Nice that you're reading my script.

$name = readline("Hey. What's your name?\n");
echo "\n Hey $name\n \n";

$figurename = readline($name . ", What shape do you want me to calculate? I can calculate a\nRectangle\nTriangle\nCircle\nBox\n\nMake sure it is all written in small caps.\n\n");

if ($figurename == "rectangle") {
  function rectangle($rectanglewlength, $rectanglewidth) {
  return $rectanglelength * $rectanglewidth;
}

$rectanglelength = readline("What is the lenght of the rectangle?\n\n");
echo "Your number is :" . $rectanglelength;

$rectanglewidth = readline("What is the width of the rectangle?\n\n" );
echo "Your number is :" . $rectanglewidth;

echo "The area of your rectangle is :" . $rectanglewidth * $rectanglelength ;
echo "\n \n";
}elseif($figurename == "circle") {
function circle($pi, $diameter) {
  return $pi * $diameter;
}
$pi = 3.14;
$diameter = readline("What is the diameter of the circle?\n\n");

echo "The area of the circle is : $pi * $diameter \n " ;
}

elseif ($figurename == "box") {
function box($boxwidth, $boxlength, $boxheight) {
  return $boxwidth * $boxlength * $boxheight;
}

$boxwidth = readline("\nWhat is the width of the box? \n \n");
echo "\n The number you choose was: " . $boxwidth;
$boxlength = readline("\nWhat is the length of the box? \n \n");
echo "\n The number you choose was " . $boxlength;
$boxheight = readline("\nWhat is the height of the box? \n \n");


echo "The area of the box is : " . $boxwidth * $boxlength * $boxheight ;
echo "\n \n";
}elseif ($figurename == "triangle") {
  function triangle($triangleheight, $trianglebaseline, $triangledivision){
  return $triangleheight * $trianglebaseline * $triangledivision;
}
$triangleheight = readline("\nWhat is the height of the triangle? \n \n");
echo "\nThe height of the triangle is : $triangleheight";
$trianglebaseline = readline("\nWhat is the baseline of the triangle? \n \n");
echo "\n The baseline of the triangle is $trianglebaseline\n \n";
$triangledivision = 0.5;

echo "The area of the triangle is : " . $triangleheight * $trianglebaseline * $triangledivision;
echo "\n \n";
}else {
  echo "Shape invalid. Please choose one of these shapes instead : \n Rectangle \n Triangle \n Circle \n Box ";
}


?>
