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

echo "Los resultados son :" , print_r(SegundoGrado($num,$num1,$num2));



function SegundoGrado ($a, $b, $c) {
    $ecu=(-$b+(sqrt((pow($b,2)-4*$a*$c))))/2*$a;

  
    if(is_nan($ecu)){
        $ecu="False";
    }

  
    $ecu1=(-$b-(sqrt(pow($b,2)-4*$a*$c)))/2*$a;


    if(is_nan($ecu1)){
        $ecu1   ="False";
    }

    $resultado = array("+ : "=>$ecu, "- : " =>$ecu1);

    return  $resultado;
}
?>
    
</body>
</html>