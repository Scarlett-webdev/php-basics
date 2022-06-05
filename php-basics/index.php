<?php
$title = "Home";
include 'includes/header.php';
?>

<!-- include or require 
require will break page if file doesn't exist.
include will just be ignored -->

  <h1>Hello World</h1>

  <?php 
//   printing into HTML using echo
    echo "Hello PHP";
    echo "<br/>";
    echo "second line";
    // scope! name doesn't work here
    echo $name;
  ?>

  <?php
    $name = "Scarlett";
    echo $name;
    echo "<br/>";
    echo "<h1>Hi, my name is: ".$name." </h1>"
  ?>

<?php
include 'includes/navigation.php';
?>

<?php
include 'includes/footer.php';
?>