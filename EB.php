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
    $x=$_GET['oldbill'];
    $y=$_GET['currentbill'];
    $remindunits=$y-$x;
    $free=$remindunits-100;
    $unitA=$free*3.50;
    $unitB=$free*4.00;
    $unitC=$free*5.20;
    $unitD=$free*6.20;

    if ($free<=250) {
        echo "<table style='border:1'><tr><td>Your Bill Amount is $unitA</td><td>This Month usage Units $remindunits</td><td> After Reduce Free Units $free</td></tr></table>";
    }elseif ($free<=750) {
        echo "Your Bill Amount is $unitB<br> This Month usage Units $remindunits<br> After Reduce Free Units $free";
    }elseif ($free<=1500) {
        echo "Your Bill Amount is $unitC<br> This Month usage Units $remindunits<br> After Reduce Free Units $free";
    }elseif ($free>1500) {
        echo "Your Bill Amount is $unitD<br> This Month usage Units $remindunits<br> After Reduce Free Units $free";
    }
    ?>
</body>
</html>