<?php


if(isset($_GET) && !empty($_GET)){
    echo "El título del libro es:  ".$_GET['Título']. "<br> EL autor del libro es : ". $_GET['Autor']."<br>"
     . "La editorial del libro es: " . $_GET['Editorial'] . "<br> Las páginas que tiene el libro es: " . $_GET['Páginas'] ;
    //var_dump nos puede ayudar a entender lo que hemos recibido
    echo "<hr><pre>";
}
 else {
     echo "No hemos recibido nada!";
}
