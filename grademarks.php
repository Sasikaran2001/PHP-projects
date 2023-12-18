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
   
    if ($a>=90) {
        echo "Tamil A+ grade and the Mark is $a<br>";
    }elseif ($a>=70) {
        echo "Tamil B+ grade and the Mark is $a<br>";
    }elseif ($a>=50) {
        echo "Tamil C+ grade and the Mark is $a<br>";
    }elseif ($a>=35) {
        echo "Tamil D grade and the Mark is $a<br>";
    }elseif ($a<35) {
        echo "Tamil E- grade and the Mark is $a*3<br>";
    }
    
    if ($b>=90) {
        echo "English A+ grade and the Mark is $b<br>";
    }elseif ($b>=70) {
        echo "English B+ grade and the Mark is $b<br>";
    }elseif ($b>=50) {
        echo "English C+ grade and the Mark is $b<br>";
    }elseif ($b>=35) {
        echo "English D grade and the Mark is $b<br>";
    }elseif ($b<35) {
        echo "English E- grade and the Mark is $b<br>";
    }

    if ($c>=90) {
        echo "Maths A+ grade and the Mark is $c<br>";
    }elseif ($c>=70) {
        echo "Maths B+ grade and the Mark is $c<br>";
    }elseif ($c>=50) {
        echo "Maths C+ grade and the Mark is $c<br>";
    }elseif ($c>=35) {
        echo "Maths D grade and the Mark is $c<br>";
    }elseif ($c<35) {
        echo "Maths E- grade and the Mark is $c<br>";
    }

    if ($d>=90) {
        echo "Science A+ grade and the Mark is $d<br>";
    }elseif ($d>=70) {
        echo "Science B+ grade and the Mark is $d<br>";
    }elseif ($d>=50) {
        echo "Science C+ grade and the Mark is $d<br>";
    }elseif ($d>=35) {
        echo "Science D grade and the Mark is $d<br>";
    }elseif ($d<35) {
        echo "Science E- grade and the Mark is $d<br>";
    }
    
    if ($e>=90) {
        echo "Social A+ grade and the Mark is $e<br>";
    }elseif ($e>=70) {
        echo "Social B+ grade and the Mark is $e<br>";
    }elseif ($e>=50) {
        echo "Social C+ grade and the Mark is $e<br>";
    }elseif ($e>=35) {
        echo "Social D grade and the Mark is $e<br>";
    }elseif ($e<35) {
        echo "Social E- grade and the Mark is $e<br>";
    }


    if ($total>=480) {
        echo "You Have Scored Firstclass with Desintion and the Mark is $total<br>";
    }elseif ($total>=400) {
        echo "You Have Scored Firstclass and the Mark is $total<br>";
    }elseif ($total>=350) {
        echo "You Have Scored Secondlass and the Mark is $total<br>";
    }elseif ($total>=300) {
        echo "You Have Scored Thirdclass and the Mark is $total<br>";
    }elseif ($total<200) {
        echo "You Will Pass and the Mark is $total<br>";
    }
    ?>
</body>
</html>