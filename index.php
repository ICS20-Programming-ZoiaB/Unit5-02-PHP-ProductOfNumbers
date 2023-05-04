<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Product of Numbers Webpage, PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="ZoiaB">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/android-chrome-512x512.png">
    <link rel="manifest" href="./fav_index/android-chrome-512x512.png">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Product of Numbers Webpage, PHP</title>
  </head>
  <body>
    
    <!-- Header and text -->
      <?php
        echo "<h1>Product of Numbers Webpage, PHP</h1>";
        echo "<h3>This is my producs webpage</h3>";
        echo "<p>Enter two positive integers in the spaces below</p>";
        echo "<h3>Your Input:</h3>";
      ?>
      
      <!-- Form for user input -->
      <form action="./results.php" method="post" target="results">
        <label for="first number">Enter a positive integer:</label>
        <input type="number" step="1" min="0" name="first-number" placeholder="An integer..."><br><br>
        <label for="second number">Enter another positive integer:</label>
        <input type="number" min="0" step="1" name="second-number" placeholder="Another integer..."><br><br>
        <input type="submit" value="Submit Numbers" id="styled-button">
      </form
        
    <!-- Iframe  -->
    <iframe id="results" name="results"></iframe>

    <!-- Image -->
    <img src="./images/multiplication.png" alt="Multiplication expression" width="400" length="400">
  </body>
</html>