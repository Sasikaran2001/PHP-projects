<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET['number1']))
    {
        $a=$_GET['number1'];
        $sum=0;
        while ($a>0)
        {
           $x=$a%10; 
           $sum=$sum + $x;
           $a=$a/10;
        }
    }
    ?>
    <form method="get" action="<?=$_SERVER['PHP_SELF']?>">
        <input type="number" name="number1" id="number1" value="<?=$a?>"><br>
        <input type="submit" value="Submit"><br>
        <input type="number" value="<?=$sum ?>" disabled>
    </form>
</body>
</html>