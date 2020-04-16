<?php

    /*
        Stampare una stringa verde se la variabile password
        passata in GET è uguale a “Boolean”,
        altrimenti stampare una stringa rossa.
    */

    $stringa = $_GET['password'];   //Do alla variabile stringa una password tramite get

    //in questo caso dovrò scrivere     ../php-stringa-colorata/index.php?password=Boolean (Boolean = corretto)

    if ($stringa == 'Boolean') {    //Controllo se ho passato in variabile get la stringa "Boolean"
        echo "<p style ='background-color:green'>" . $stringa . '</p>'; //se vero stampo p con background verde
    }   else {
        echo "<p style ='background-color:red'>" . $stringa . '</p>';   //se falso stampo con background rosso
    }

 ?>
