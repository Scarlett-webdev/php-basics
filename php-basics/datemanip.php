<?php
$title = "date manipulation";
include 'includes/header.php';
?>

  <a href="index.php">&lt &lt Go Back</a>
  
<h1>Date Manipulation</h1>

    <?php
       
       $dateNow = getDate();

       echo "<p>Month: ".$dateNow['mon']."</p>";
       echo "<p>Day: ".$dateNow['mday']."</p>";
       echo "<p>Year: ".$dateNow['year']."</p>";

       echo "<p>".$dateNow['mon']."/".$dateNow['mday']."/".$dateNow['year']."</p>";

       echo "<hr/>";

       echo "<p>The time is: ".date("h:i:sa")." somewhere... it's 8 hrs earlier really...</p>";

    ?>


<?php
include 'includes/navigation.php';
?>

<?php
include 'includes/footer.php';
?>