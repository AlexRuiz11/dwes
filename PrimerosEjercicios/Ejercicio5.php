<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
<?php

$divisible=3;

for ( $i = 1; $i < 10; $i = $i + 1) {
   if($i%$divisible==0){

    echo $i, "<br>";
   }
}

    ?>
</body>
</html>