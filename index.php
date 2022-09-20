<?php

// USA PARAMETRO => word <= PER GET
$word_censur = $_GET['word']; // <==

$text = 'Sono egoista, impaziente e insicura. Faccio degli errori, sono fuori controllo e a volte difficile da gestire. Ma se non puoi gestire la mia parte peggiore, allora sicuro come l’inferno non mi meriti quando sono al mio meglio. ____ by. Marilyn Monroe';
$lenght_text = strlen($text);

$new_text = str_replace($word_censur, '***', $text);
$lenght_new_text = strlen($new_text);

?>

<!doctype html>
<html lang="en">

<head>
    <title>PHP bad Words</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/style.css">
</head>

<body class="d-flex flex-column">
    <header class="container text-center pt-4">
        <section>
            <h1 class="mb-5"><span class="simbol">PHP</span> bad Words</h1>
        </section>
    </header>

    <main class="container text-left">
        <section class="myList p-3 mb-2">
            <div>
                <h3 class="pb-3 pl-3">Testo originale</h3>
                <p class="t-indent"><?= $text; ?></p>
                <hr>
                <p>La lunghezza del testo originale è di <b><?= $lenght_text; ?></b> caratteri.</p>
            </div>
        </section>
        <section class="myList p-3">
            <div>
                <h3 class="pb-3 pl-3">Testo nuovo</h3>
                <p class="t-indent"><?= $new_text; ?></p>
                <hr>
                <p>La lunghezza del nuovo testo è di <b><?= $lenght_new_text; ?></b> caratteri.</p>
            </div>
        </section>
    </main>

    <footer class="container mt-auto">
        <p class="d-flex align-items-center justify-content-center"><span class="heart text-center">♥</span><span class="mx-2">con tante grazie da Me a Voi</span><span class="heart text-center">♥</span></p>
    </footer>

</body>

</html>