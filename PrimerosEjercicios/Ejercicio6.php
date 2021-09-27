<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
<?php

$Fibo=1;
$FiboAnterior=0;
$Resultado=0;

echo $FiboAnterior, "<br>", $Fibo , "<br>";
for ( $i = 1; $i < 10; $i = $i + 1) {

    $Resultado= $Fibo + $FiboAnterior;

$FiboAnterior= $Fibo;    
  
$Fibo = $Resultado;
echo $Resultado, "<br>";
   
}

    ?>
</body>
</html>