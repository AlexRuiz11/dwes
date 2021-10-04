<?php


if(isset($_GET["nombre"])&&!empty($_GET["nombre"]  && strlen($_GET["nombre"])>3)){
    echo "Bienvenido :  ".$_GET['nombre'];
}
 else {
     
    //header("Location: Ejercicio3.php");
    include("Ejercicio3.php");

    


}
?>