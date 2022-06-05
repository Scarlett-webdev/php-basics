<?php
$title = "if statements";
include 'includes/header.php';
?>


  <a href="index.php">&lt &lt Go Back</a>
  

    <?php
        $grade = 50;

        echo "<h2>If Statement</h2>";

        echo "<p style='color:purple'>your score is ".$grade."/100</p>";

        if($grade >= 50){
            echo "<h3>You have passed! ...apparently</h3>";
        } else {
            echo "<h3>you have failed miserably</h3>";
        }

    ?>


<?php
include 'includes/navigation.php';
?>

<?php
include 'includes/footer.php';
?>