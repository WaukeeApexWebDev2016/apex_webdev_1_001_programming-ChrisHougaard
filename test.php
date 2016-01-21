<?php

echo "Hello World\n";

$ages = array(5, 6, 99);

$ages2 = [21, 67, 32];


array_push($ages, 11);
echo var_dump($ages);

echo var_dump($ages[0]);
echo "\n";
foreach ($ages as $age) {
  echo $age . "\n";
}
?>
