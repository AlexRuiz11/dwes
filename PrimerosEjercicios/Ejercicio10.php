<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
<?php





$array1 = array ("Pivot" =>"Pau Gasol", "Alero" =>"Rudy Fernandez","Ala-Pivot"=>"Mcgredy","Base" =>"Ricky Rubio", "Escolta" =>"Klay Thompson");


echo " Todo el equipo :<br>";
foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
}





?>
    
</body>
</html>