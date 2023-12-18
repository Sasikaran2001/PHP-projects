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
    $eligible=$a*10;
    if ($b<=$eligible) {
       echo "Your Eligible to This Amount Rs:$b";
    }else {
        echo  "Your not Eligible to Your entered Amount Rs:$b Your Eligible to this Amount only Rs:$eligible " ;
    }
    

    ?>
</body>
</html>