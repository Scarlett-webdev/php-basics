<?php
$title = "Array";
include 'includes/header.php';
?>

  <a href="index.php">&lt &lt Go Back</a>
  

    <?php
        echo "<h2 style='color:DarkRed'>Arrays</h2>";

        $numbers = array(1,2,3,4,5,6,7,8,9,10);

        echo $numbers[0];

        $size = count($numbers);

        echo "<h3>The Size of Numbers Array is: ".$size."</h3>";
    ?>

<?php
include 'includes/navigation.php';
?>

<?php
include 'includes/footer.php';
?>