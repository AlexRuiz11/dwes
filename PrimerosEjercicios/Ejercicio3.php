<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
<?php

define("CONVERSOR_PESETAS", 166.386);

$euros = 147;
$conversor =$euros*CONVERSOR_PESETAS;

echo "<p>", $conversor, " pesetas</p> ";

    ?>
</body>
</html>