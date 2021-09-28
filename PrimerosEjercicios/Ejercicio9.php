<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
<?php


$array1 [] = "Pivot";
echo $array1[0], "<br>";

$array1 [] = "Ala-Pivot";
echo $array1[1], "<br>";


$array1 [] = "Escolta";
echo $array1[2], "<br>";


$array1 [] = "Alero";
echo $array1[3], "<br>";


$array1 [] = "Base";
echo $array1[4], "<br>";




echo " Todo el equipo :<br>";
foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
}





?>
    
</body>
</html>