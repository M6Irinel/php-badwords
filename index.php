<?php

// USA PARAMETRO => word <= PER GET in bar search
$word_censur = isset($_GET['word']) ? $_GET['word'] : null;

$lenght_text = strlen($text = 'Sono egoista, impaziente e insicura. Faccio degli errori, sono fuori controllo e a volte difficile da gestire. Ma se non puoi gestire la mia parte peggiore, allora sicuro come l’inferno non mi meriti quando sono al mio meglio. ____ by. Marilyn Monroe');

$num_censur = '';
for ($i = 0; $i < strlen($word_censur); $i++) {
    $num_censur .= '*';
}

$lenght_new_text = strlen($new_text = str_replace($word_censur, $num_censur, $text, $count_word));

?>


<!doctype html>
<html lang="it">

<head>
    <title>PHP bad Words</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                <p class="mb-0">Il testo originale è lungo <b><?= $lenght_text; ?></b> caratteri.</p>
            </div>
        </section>

        <section class="myList p-3 mb-2">
            <div class="d-flex justify-content-center">
                <form class="d-flex flex-column w-50 text-center" action="./index.php" method="GET">
                    <label for="word">Qual'è parola vuoi censurare?</label>
                    <input class="mb-2 text-center form-control" type="text" id="word" name="word" placeholder="Inserisci la parola">
                    <input class="btn btn-primary" type="submit" value="Avvia la censura">
                </form>
            </div>
        </section>

        <?php if ($count_word != 0) : ?>
            <section class="myList p-3 mb-2">
                <div>
                    <h3 class="pb-3 pl-3">Testo nuovo</h3>
                    <p class="t-indent"><?= $new_text; ?></p>
                    <hr>
                    <p>La lunghezza del nuovo testo è di <b><?= $lenght_new_text; ?></b> caratteri.</p>
                    <?php if ($count_word == 1) : ?>
                        <p class="mb-0">Hai censurato solo <b>una</b> parola.</p>
                    <?php elseif ($count_word > 1) : ?>
                        <p class="mb-0">Sono state censurate <b><?= $count_word; ?></b> parole.</p>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>
    </main>

    <footer class="container mt-auto">
        <section>
            <p class="d-flex align-items-center justify-content-center simbol"><span class="heart text-center">♥</span><span class="mx-2">con tante grazie da Me a Voi</span><span class="heart text-center">♥</span></p>
        </section>
    </footer>

</body>

</html>