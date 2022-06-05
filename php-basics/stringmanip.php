<?php
$title = "string manipulation";
include 'includes/header.php';
?>


  <a href="index.php">&lt &lt Go Back</a>
  
<h1>String Manipulation</h1>

    <?php
       
       $phrase1 = "Some random words";
       $phrase2 = "These words mean nothing";
       $phrase3 = "i want everything to be...";
       echo "<p>$phrase1</p>";
       echo "<p>$phrase2</p>";
       echo "<p style='color:DarkSeaGreen'>".$phrase1."; ".$phrase2.".</p>";

        echo "<p>Uppercase first letter: " .ucfirst($phrase3)."</p>";
        echo "<p>Uppercase first letter of each word: " .ucwords($phrase3)."</p>";

    ?>

<?php
include 'includes/navigation.php';
?>

<?php
include 'includes/footer.php';
?>