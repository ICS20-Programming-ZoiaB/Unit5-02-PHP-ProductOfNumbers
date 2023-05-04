<?php

  //initialize sum variable
  $sum = 0;

  //getting the user's two numbers to find the product
  $firstNum = intval($_POST['first-number']);
  $secondNum = intval($_POST['second-number']);

  //using a for loop to do repeated addition to get the product
  for ($counter = 1; $counter <= $secondNum; $counter++) {
    $sum = $sum + $firstNum;
  }

  //displaying the sum/product to user
  echo "The product of the two numbers is " . $sum . ".";
?>