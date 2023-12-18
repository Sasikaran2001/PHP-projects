<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=$_GET['number1'];
    $b=$_GET['number2'];
    $c=$_GET['number3'];
    $d=$_GET['number4'];
    $e=$_GET['number5'];
    $total=$a+$b+$c+$d+$e;
    $average=$total/5;
    echo "Your total mark is $total<br>";
    echo "Your mark Average is $average<br>";
    if ($a>=35 && $b>=35 && $c>=35 && $d>=35 && $e>=35) {
       echo   "You are Pass, Still continue this Journey<br> Tamil=$a <br> English=$b <br> Maths=$c <br> Science=$d <br> Social=$e";
    }else {
        echo   "You are Fail,Your's One of the Subject mark is lower than 35, Better luck Next time<br> Tamil=$a <br> English=$b <br> Maths=$c <br> Science=$d <br> Social=$e <br>";
    }
    

    ?>
</body>
</html>