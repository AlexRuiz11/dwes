<?php


if(isset($_GET["nombre"])&&!empty($_GET["nombre"])){
    echo "Bienvenido :  ".$_GET['nombre'];
}
 else {
    header("Location: Ejercicio2.php");


}
