<?php

  //initialize product variable
  $product = 0;

  //getting the user's two numbers to find the product
  $firstNum = floatval($_POST['first-number']);
  $secondNum = floatval($_POST['second-number']);

  //using a for loop to do repeated addition to get the product
  for ($counter = 1; $counter <= abs($secondNum); $counter++) {
    $product = $product + abs($firstNum);
  }

  //Add back negative sign if needed
  if (($firstNum < 0 && $secondNum > 0) || ($firstNum > 0 && $secondNum < 0)) {
    $product = $product * -1;
  }

  //displaying the product/product to user
  echo "The product of your two selected numbers is " . $product . ".";
?>