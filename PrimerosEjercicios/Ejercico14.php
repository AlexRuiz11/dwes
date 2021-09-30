<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
<?php


$palabra="aaaaaaab";


if(Palindromo($palabra)== 1){
    echo $palabra ." Es un palindromo";
    

}else{
    echo $palabra ." No es un palindromo";

}

function Palindromo ($a) {
       
    $validar=true;
     
     $arr = str_split($a);
 
     $arr1 = str_split( strrev($a));
    for($i =0;$i<count($arr);$i++){
        if($arr[$i]!=$arr1[$i]){
            $validar=false;
        }

    }
    
   return $validar;
    
     
 }

?>
    
</body>
</html>