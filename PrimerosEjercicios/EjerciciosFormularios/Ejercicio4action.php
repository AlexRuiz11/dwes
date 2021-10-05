<?php


if(isset($_GET["num1"])&&!empty($_GET["num1"] &&  is_numeric($_GET["num1"])  && is_numeric($_GET["num2"])  )){

    if($_GET['operación'][0]=="suma"){

    $suma=$_GET["num1"] + $_GET["num2"];
        echo "La suma es: ". $suma;

    }
    if($_GET['operación'][0]=="resta"){
        $resta=$_GET["num1"] - $_GET["num2"];

        echo "La resta es: ". $resta;

    }
    if($_GET['operación'][0]=="multiplicación"){
        echo "La multiplicación es: ".$_GET["num1"]* $_GET["num2"];

    }
    if($_GET['operación'][0]=="división"){
        echo "La división es: ".$_GET["num1"]/ $_GET["num2"];

    }
    if($_GET['operación'][0]==""){

        include("Ejercicio4.php");

        echo'<script type="text/javascript">
        alert("Elija una operación!!!");
        </script>';
        //window.location.href="Ejercicio4.php"
    }

}
 else {
     
    include("Ejercicio4.php");
    echo'<script type="text/javascript">
    alert("Tiene que ser un numero y además no puede estar vacío.")
   ;
    </script>';
    


}
?>