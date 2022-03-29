<?php

$testo_originale = "Io dico cacca quanto mi pare e piace, capito? Dov'è la libertà di parola, eh!? Sai che ti dico? Cacca, cacca e stra-cacca HAHAHA!!!";

$lunghezza_testo_originale = strlen($testo_originale);

$parole_censurate = 0;

$parola_offensiva = $_GET['badword'];

$testo_censurato = str_replace($parola_offensiva, '🚫', $testo_originale, $parole_censurate);

$lunghezza_testo_censurato = strlen($testo_censurato);

// echo "Testo originale: ";
// echo "<br>";
// echo "<br>";
// echo $testo_originale;
// echo "<br>";
// echo "<br>";
// echo "Testo censurato: ";
// echo "<br>";
// echo "<br>";
// echo $testo_censurato;
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "Il testo è lungo: ";
// echo $lunghezza_testo;
// echo " caratteri.";
// echo "<br>";
// echo "<br>";
// echo "Parole censurate: ";
// echo $parole_censurate;
// echo ".";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Badwords</title>
</head>

<body>

    <div class="container">
        <h2 class="original">Testo originale:</h2>

        <p><?php echo $testo_originale ?></p>

        <h2 class="censored">Testo censurato:</h2>

        <p><?php echo $testo_censurato ?></p>

        <br>

        <h2>
            📝 Il testo originale è lungo:
            <span class="result">
                <?php echo $lunghezza_testo_originale ?> caratteri.
            </span>
        </h2>

        <h2>
            🤬 Il testo censurate è lungo:
            <span class="result">
                <?php echo $lunghezza_testo_censurato ?> caratteri.
            </span>
        </h2>

        <h2>
            ✔️ Ho censurato:
            <span class="result">
                <?php echo $parole_censurate ?> parole!
            </span>
        </h2>
    </div>

</body>

</html>