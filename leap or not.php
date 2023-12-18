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
    $x=$_GET['number'];
    $y=$x%4;
    if ($y==0) {
        echo "This year is Leap Year";
    }else {
        echo "This year is Not Leap Year";
    }

    ?>
</body>
</html>