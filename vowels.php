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
     $x=$_GET['vowels'];
    
     if ($x==="a" || $x==="e" || $x==="i" || $x==="o" || $x==="u") {
        echo "The letter $x is Vowel";
     }else{
        echo "The letter $x is Not Vowel";
     } 
    ?>
</body>
</html>