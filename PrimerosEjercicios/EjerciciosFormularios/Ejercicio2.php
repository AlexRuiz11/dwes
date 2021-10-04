<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>

<h2>Nuestro primer formulario</h2>
    <form method="GET" action="Ejercicio2Action.php">
        <label>Nombre</label><input type="text" value="" name="nombre"><br>
       
        <?php    
        
        
        if( isset($_GET["nombre"])&&!empty($_GET["nombre"]))
        {

        }else{
            echo "El campo del nombre esta vacio";


        }

       
        ?> 

        <input type="submit" value="enviar">
       
        

</body>
</html>