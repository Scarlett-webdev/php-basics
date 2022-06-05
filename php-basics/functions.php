<?php
$title = "functions";
include 'includes/header.php';
?>

  <a href="index.php">&lt &lt Go Back</a>
  
<h1>Functions</h1>

    <?php

    function writeMessage(){
        echo "You are a really nice person, have a nice time.";
    }

    writeMessage();
    echo "<hr/>";
    writeMessage();

    echo "<hr/>";

    $x = 2;
    $y = 7;

    function addNumbers($x, $y){
        $sum = $x + $y;
        echo "x is ".$x."<br/>";
        echo "y is ".$y."<br/>";

        echo "<p>The sum of x and y is ".$sum."</p>";
    }

    addNumbers($x, $y);

    echo "<hr/>";

    $number = 500;

    function changeNum(&$num){
        echo "<h4>Original number is: ".$num."</h4>";
        $num = $num + 10;
        echo "<h4>Changed number is: ".$num."</h4>";
    }

    changeNum($number);

    echo "<hr/>";

    function gettingReturn($pro1, $pro2){
      $prod = $pro1 * $pro2;
      return $prod;
    }

    $return_value = gettingReturn(35,72);
    echo "<h4>the product of 35 and 72 is: ".$return_value."</h4>";


    ?>

<?php
include 'includes/navigation.php';
?>

<?php
include 'includes/footer.php';
?>