<html>
    <head>

       <title>SKELDON</title>
       <title>SKELDON</title>


    </head>

  <body>


<!-- DEFINIZIONE DI VARIABILI STATICHE E FUNZIONE -->

<?php

// Defizione di una funzione che non va a modificare il valore di una variabile fuori da questa seppur abbia lo stesso nome

function annigiuseppe () {

  static $age_giuseppe = 0; //abbiamo dichiarato una variabile statica che ci permette di imaggazzinare il valore

  $age_giuseppe = $age_giuseppe +1;

  echo "Il compleanno numero $age_giuseppe<br />";

  }

//Definizione delle variabili normali

$age_giuseppe = 28;

//Dichiarazione funzione quanto volte vogliamo che va a richiamre il valore all'interno della funzione

annigiuseppe ();
annigiuseppe ();

  echo "$age_giuseppe <br />";

?>




<!-- DEFINIZIONE DI VARIABILI SEMPLICI -->

<?php

//definizione di variabili semplici e conseguente stampa o echo del valore

    $age_rossella = 25;


      print "Hello Skeldon <br />";
      print "Goodbye.<br />";
      print "ciaociaocia <br />";
      echo "$age_rossella <br />";
  ?>




  </body>


</html>
