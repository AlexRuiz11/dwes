<?php

    if (is_array($_GET["como"]) ) { 
        echo "<ul>";
        foreach ( $_GET["como"] as $como ) { 
            if($como!=""){
                echo "<li>";
                echo $como; 
                echo "</li>"; 
            }
         }
    
        
         echo "</ul>";
         
    }




