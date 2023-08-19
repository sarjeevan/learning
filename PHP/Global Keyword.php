<?php
$x = 10;
$y = 20;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 30
?>