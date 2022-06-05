<?php
$title = "while do while loops";
include 'includes/header.php';
?>


  <a href="index.php">&lt &lt Go Back</a>
  

    <?php
        echo "<h2 style='color:Coral'>While Loop</h2>";

        $grade = 85;

        while($grade > 60){
            echo "<p>Grade is: ".$grade." I am passing!</p>";
            $grade -= 5;
        };


    ?>

<?php
        echo "<h2 style='color:Chartreuse'>Do While Loop</h2>";

        $toDo = 10;

        do{
            echo "<p>I have ".$toDo." things to do!</p>";
            $toDo--;
        } while($toDo > 1);


    ?>


<?php
include 'includes/navigation.php';
?>

<?php
include 'includes/footer.php';
?>