<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a=$_GET['number1'];
    $b=$_GET['number2'];
    echo "<table border=\"1\">";
    for ($s=$a;$a<$b;$a++);
     {
    echo "<tr><td>";    
    echo "Hi I am Sasi ";
    echo "</td></tr>";   
    }
    echo "</table>";
?>
</body>
</html>