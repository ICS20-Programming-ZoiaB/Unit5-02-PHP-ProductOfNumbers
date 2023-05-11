<?php

  //initialize product variable
  $product = 0;

  //getting the user's two numbers to find the product
  $firstNum = $_POST['first-number'];
  $secondNum = $_POST['second-number'];

  //If statement to give an error message if nothing nothing is entered or if numbers are invalid
  if ((!is_numeric($firstNum) || !is_numeric($secondNum)) || ($firstNum == "" || $secondNum == "")) {
    echo "Please enter valid numbers.";
  }

  //Else
  else {
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
  }
?>