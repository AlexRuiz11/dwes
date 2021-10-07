<?php

if (is_array($_GET["como"]) ) { 
    $contador=0;
    foreach ( $_GET["como"] as $como ) { 

       if($como=="Correcto"){
        $contador++;
       }
            
        
     }
     foreach ( $_GET["como1"] as $como ) { 

        if($como=="Correcto"){
         $contador++;
        }
             
         
      }
      foreach ( $_GET["como2"] as $como ) { 

        if($como=="Correcto"){
         $contador++;
        }
             
         
      }
      foreach ( $_GET["como3"] as $como ) { 

        if($como=="Correcto"){
         $contador++;
        }
             
         
      }
      foreach ( $_GET["como4"] as $como ) { 

        if($como=="Correcto"){
         $contador++;
        }
             
         
      }

     echo "<h1> Su nota es: "  . $contador;
}




