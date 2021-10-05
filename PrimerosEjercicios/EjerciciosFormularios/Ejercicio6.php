<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>

<h2>Nuestro primer formulario</h2>
<form action="Ejercicio6Action.php" method="get">

<input type="checkbox" name="como[]" id="como1" value="Web">
<label for="como1">Una web</label>

<input type="checkbox" name="como[]" id="como2" value="Google">
<label for="como2">Google</label>

<input type="checkbox" name="como[]" id="como3" value="Anuncio en prensa">
<label for="como3">Anuncio en prensa</label>

<input type="checkbox" name="como[]" id="como4" value="Anuncio en tv">
<label for="como4">Anuncio en tv</label>

<button type="submit">Enviar</button>

</form>
        

</body>
</html>