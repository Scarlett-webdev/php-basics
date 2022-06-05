<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP basics - switch statement</title>
  </head>
  <body style="background-color:darkgray">

  <a href="index.php">&lt &lt Go Back</a>

  <?php
    
    echo "<h2>Switch Statement</h2>";

    $grade = "C";

    echo "<h3>Your Grade: ".$grade." </h3>";

    switch($grade){
        case "A"
        : echo "<h2 style='color:green'>YOU ARE A SUPERSTAR!</h2>";
        break;
        case "B"
        : echo "<h2 style='color:blue'>YOU DID PRETTY WELL...</h2>";
        break;
        case "C"
        : echo "<h2 style='color:yellow'>OKAY... MAYBE A LITTLE MORE STUDYING</h2>";
        break;
        case "D"
        : echo "<h2 style='color:orange'>NOT GOOD MAN...</h2>";
        break;
        case "F"
        : echo "<h2 style='color:red'>YEAH YOU STRAIGHT UP FAILED</h2>";
        break;
    }

    
    
  ?>
   
   <?php
include 'includes/navigation.php';
?>

<?php
include 'includes/footer.php';
?>