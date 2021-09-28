<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
<?php


$array1 = array ("Pivot", "Alero","Ala-Pivot","Base", "Escolta");


foreach ($array1 as $position=>$element){
    echo $element ,'<br>';
}

echo "<br>";
foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
}





?>
    
</body>
</html>