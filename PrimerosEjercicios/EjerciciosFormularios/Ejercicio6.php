<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>

<h1>Ejercicio Test</h1>
<form action="Ejercicio6Action.php" method="get">
<h2>Primera pregunta</h2>

<input type="radio" name="como[]" id="como1" value="Falsa">
<label for="como1">Falsa</label>

<input type="radio" name="como[]" id="como2" value="Correcto">
<label for="como2">Correcto</label>

<h2>Segunda pregunta</h2>

<input type="radio" name="como1[]" id="como3" value="Correcto">
<label for="como3">Correcto</label>

<input type="radio" name="como1[]" id="como4" value="Anuncio en tv">
<label for="como4">Falsa</label>
<h2>Tercera pregunta pregunta</h2>

<input type="radio" name="como2[]" id="como3" value="Correcto">
<label for="como3">Correcto</label>

<input type="radio" name="como2[]" id="como4" value="Falsa">
<label for="como4">Falsa</label>
<h2>Cuarta pregunta</h2>

<input type="radio" name="como3[]" id="como3" value="Correcto">
<label for="como3">Correcto</label>

<input type="radio" name="como3[]" id="como4" value="Falsa">
<label for="como4">Falsa</label>
<h2>Quinta pregunta</h2>

<input type="radio" name="como4[]" id="como3" value="Correcto">
<label for="como3">Correcto</label>

<input type="radio" name="como4[]" id="como4" value="Falsa">
<label for="como4">Falsa</label>
<br><br><br>


<button type="submit">Enviar</button>

</form>
        

</body>
</html>