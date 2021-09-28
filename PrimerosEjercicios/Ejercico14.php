<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
<?php


Palindromo("Hola");


function Palindromo ($a) {
       
   $validar=true;
    

    $arr = str_split($a);
    $arr1 = str_split( strrev($a));
    for($i=1; $i <0;$i+1){
        if($arr[$i]!=$arr1[$i]){
            $validar= false;
        }

    }


    
}
?>
    
</body>
</html>