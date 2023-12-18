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
    if ($x>=0) {
        echo "This is positive number";
    }else {
        echo "This is negaative number";
    }

    ?>
</body>
</html>