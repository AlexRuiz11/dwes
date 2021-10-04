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
        <label>Numero 1</label><input type="text" value="" name="num1"><br>
        <label>Numero 2</label><input type="text" value="" name="num2"><br>

       
        <?php    
        
        
       

       
        ?> 
           <label for="cars">Elige la operación:</label>
        <select name="cars[]" id="cars" multiple>
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multiplicación">multiplicación</option>
            <option value="división">división</option>
        </select>

        <input type="submit" value="enviar">
       
        

</body>
</html>