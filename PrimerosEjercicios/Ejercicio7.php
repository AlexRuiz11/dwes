<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
<?php

define("Constante1", 169);
define("Constante2", 193);
$Primo=false;

for ( $i = 1; $i < Constante1; $i = $i + 1) {

if(Constante1%$i){

    echo $i ,"<br>";

}else{
    $Primo=true;

}



}

if($Primo=true){

    echo "EL numero ", Constante1, " es primo.";
}

    ?>
</body>
</html>