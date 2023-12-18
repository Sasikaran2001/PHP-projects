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
    $x=$_GET['number1'];
    $y=$_GET['number2'];
    $z=$_GET['number3'];
    if ($x==$y && $x==$z && $y==$z) {
        echo "Don't Enter the Same Number";
    }elseif ($x>$y && $x>$z) {
        echo "$x is Bigger than $y and $z";
    }elseif ($y>$z && $y>$x) {
        echo "$y is Bigger than $x and $z";
    }else {
        echo "$z is Bigger than $x and $y";
    }

    ?>
</body>
</html>