<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>

<h2>Nuestro primer formulario</h2>
    <form method="GET" action="Ejercicio4action.php">
        <label>Numero 1</label><input type="text" value="" name="num1"><br>
        <label>Numero 2</label><input type="text" value="" name="num2"><br>

           <label for="operación">Elige la operación:</label>
        <select name="operación[]" id="operación" multiple>
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multiplicación">multiplicación</option>
            <option value="división">división</option>
        </select>


       
         
        <input type="submit" value="enviar">

       
        

</body>
</html>