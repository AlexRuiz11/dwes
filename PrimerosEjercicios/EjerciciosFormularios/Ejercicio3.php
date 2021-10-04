<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>

<h2>Nuestro primer formulario</h2>
    <form method="GET" action="Ejercicio3Action.php">
        <label>Nombre</label><input type="text" value="" name="nombre"><br>
       
        <?php    
        
        
        if( isset($_GET["nombre"])&&!empty($_GET["nombre"] ))
        {
            if(strlen($_GET["nombre"])>3){
                
            }else{
                echo "El nombre: ". $_GET["nombre"]." debe ser mayor a 3 caracteres";


            }

        }else{
            echo "El campo del nombre esta vacio ";


        }

       
        ?> 

        <input type="submit" value="enviar">
       
        

</body>
</html>