<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
<?php

$contador=0;
$multiplicador = 8;

echo "<table border=1>";
echo "<td colspan='2'> Tabla del ", $multiplicador, "</td>";

for ( $i = 1; $i < 10; $i = $i + 1) {
    echo "<tr>";
    $contador = $contador+$multiplicador;
    echo "<td>", $i, "</td>";

    echo "<td>", $contador, "</td>";

       echo "</tr>";
}



echo "</table>";



    ?>
</body>
</html>