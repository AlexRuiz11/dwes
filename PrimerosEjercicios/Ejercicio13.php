<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
<?php

$num=1;
$num1=3;
$num2=1;
//require __DIR__ . '/mates.php';
require_once('mates.php');
 
echo "Los resultados son :" , print_r(SegundoGrado($num,$num1,$num2));


?>
    
</body>
</html>