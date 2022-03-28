<?php

$testo_originale = "Io dico cacca quanto mi pare e piace, capito? Dov'è la libertà di parola, eh!? Sai che ti dico? cacca, cacca e stra-cacca HAHAHA!!!";

$lunghezza_testo = strlen($testo_originale);

$parole_censurate = 0;

$testo_filtrato = str_replace('cacca', '*****', $testo_originale, $parole_censurate);

echo "Testo originale: ";
echo "<br>";
echo "<br>";
echo $testo_originale;
echo "<br>";
echo "<br>";
echo "Testo filtrato: ";
echo "<br>";
echo "<br>";
echo $testo_filtrato;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "Il testo è lungo: ";
echo $lunghezza_testo;
echo " caratteri.";
echo "<br>";
echo "<br>";
echo "Parole censurate: ";
echo $parole_censurate;
echo ".";

?>