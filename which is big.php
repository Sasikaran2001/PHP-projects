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
    if ($x>$y) {
        echo "$x is Bigger than $y";
    }else {
        echo "$y is Bigger than $x";
    }

    ?>
</body>
</html>