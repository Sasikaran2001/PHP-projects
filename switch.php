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
include "callfun.php";
ini_set('display_errors',0);
//    function add($a,$b) {
//       echo $a+$b;
//    }
//    function sub($a,$b) {
//     echo $a-$b;
//  }
//  function mul($a,$b) {
//     echo $a*$b;
//  }
//  function div($a,$b) {
//     echo $a/$b;
//  }
//  function mod($a,$b) {
//     echo $a%$b;
//  }
   if (isset($_GET['number2']))
   {
   $a=$_GET['number1'];
   $b=$_GET['number2'];
   $d_array['+']=$_GET['number3'];
   $d_array['-']=$_GET['number4'];
   $d_array['*']=$_GET['number5'];
   $d_array['/']=$_GET['number6'];
   $d_array['%']=$_GET['number7'];
   
  foreach($d_array as $k => $value ){
    switch($value) {
        case "+":
            $d=add($a,$b);
        break;
        case "-": 
           $d=sub($a,$b);
        break;
        case "*":
           $d=mul($a,$b);
        break;
        case "/":
           $d=div($a,$b);
        break;
        case "%":
           $d=mod($a,$b);
        break;
    }
  }

  
   }
   ?>
    <form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
        Number 1:<input type="number" name="number1" id="number" value="<?=$a?>"><br>
        Number 2:<input type="number" name="number2" id="number" value="<?=$b?>"><br><hr>
        <button type="submit" value="+" name="number3">ADD</button><button type="submit" value="-" name="number4">SUB</button>
            <button type="submit" value="*" name="number5">MUL</button><button type="submit" value="/" name="number6">DIV</button><button type="submit" value="%" name="number7">MOD</button><br>
            <input type="number" value="<?=$d ?>" disabled>
    </form> 

    
</body>
</html>