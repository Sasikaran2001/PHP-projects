<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $h=$_GET['number1'];
    $w=$_GET['number2'];
    $r=$_GET['number3'];
    $b=$_GET['number4'];
    $d=$_GET['number5'];
    
    switch ($d) {
        case "square" :
            $v=$h*$h;
            echo "Area of Square is $v";
            break;
            case "rectangle" :
                $v=$w*$h;
                echo "Area of Rectangle is $v";
                break;
                case "circle" :
                    $v=3.14*$r*$r;
                    echo "Area of Circle is $v";
                    break;
                    case "triangle" :
                        $v=0.5*$v*$h;
                        echo "Area of Triangle is $v";
                        break;
    }

    ?>
</body>
</html>