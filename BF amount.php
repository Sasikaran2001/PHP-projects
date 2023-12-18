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
    $b=$a*0.15;
    $Tax=$a-$b;
    $c=$a*0.10;
    $TaxcBF=$a-$c;
    $TaxcEC=$TaxcBF-$c;
    $d=$a*0.08;
    $TaxdBF=$a-$d;
    $TaxdEC=$TaxdBF-$d;
    $e=$a*0.06;
    $TaxeBF=$a-$e;
    $TaxeEC=$TaxeBF-$e;
    if ($a>=15000) {
       echo "The Rest of Money goes Tax is:$Tax";
    }elseif ($a>=10000) {
        echo  "The Rest of Money goes BF Amount is:$TaxcBF and the rest of money goes to ECI is:$TaxcEC" ;
    }elseif (10000>$a && 5000<$a) {
        echo  "The Rest of Money goes BF Amount is:$TaxdBF and the rest of money goes to ECI is:$TaxdEC" ;
    }elseif (5000>=$a) {
        echo  "The Rest of Money goes BF Amount is:$TaxeBF and the rest of money goes to ECI is:$TaxeEC" ;
    }else {
        echo "You don't need to pay Tax";
    }
    ?>
</body>
</html>