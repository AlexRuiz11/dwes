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
$contador=1;

for ( $i = 2; $i <Constante2; $i = $i + 1) {

if(Constante2%$i ==0){

    echo $i ,"<br>";
    $contador=$contado +1;


}



}

if($contador==1){

    echo "EL numero ", Constante2, " es primo.";
}

    ?>
</body>
</html>