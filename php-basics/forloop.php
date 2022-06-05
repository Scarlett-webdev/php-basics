<?php
$title = "for loop";
include 'includes/header.php';
?>


  <a href="index.php">&lt &lt Go Back</a>

  <?php
  
    echo "<h2>For Loop</h2>";
//   (variable; condition; do after loop)
    for($count = 2; $count < 11; $count++){
        echo "<p>I want ".$count." beers</p>";
    };

  ?>
   
   <?php
include 'includes/navigation.php';
?>

<?php
include 'includes/footer.php';
?>