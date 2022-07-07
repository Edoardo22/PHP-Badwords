<?php
//Creare una variabile con un paragrafo di testo a vostra scelta.
//Stampare a schermo il paragrafo e la sua lunghezza.
//Una parola da censurare viene passata dall'utente tramite parametro GET.
//Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

$paragrafo = "ciao come va? cazzo, scusa, cazzo, scusa di nuovo";
echo $paragrafo;
echo "<br>";
echo strlen($paragrafo);
echo "<br>";
$paragrafo = str_replace("cazzo", "***", $paragrafo);
echo $paragrafo;
echo "<br>";
echo strlen($paragrafo);
