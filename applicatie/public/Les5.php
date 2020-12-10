<!DOCTYPE html>
<html lang="en">

<?php

include "filmArray.php";
require_once('components.php');  //Opdracht 4
$pageData = [
    'title' => 'Eerste pagina met herbruikbare blokken',
    'name' => 'Home',
]
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $pageData['title'] ?></title>

<body>
    <?= logo($pageData['name']); ?>
    <h1>Opdracht 1 print data uit array</h1>
    <img src="<?php echo $film["imageURL"] ?>" alt="Black Panther" width="80" height="100">

    <h1>Opdracht 2 array_slice </h21 <?php
                                        print_r(array_slice($films, 2));
                                        ?> <h1>Opdracht 3 Functie maken die m.b.v. data enz.</h1>
    <?php

    function enkeleFilmNaarHTML($array)
    {
        $htmltekst = '';
        $htmltekst .= '<p>Titel:' . $array['title'] . '</p>';
        $htmltekst .= '<p>Jaar:' . $array['year'] . '</p>';
        $htmltekst .= '<p>Regisseur:' . $array['director'] . '</p>';
        $htmltekst .= '<p>Ster 1' . $array['stars'][0] . '</p>';
        $htmltekst .= '<p>Ster 2' . $array['stars'][1] . '</p>';
        $htmltekst .= '<img src="' . $array["imageURL"] . '" alt="Black Panther" width="80" height="100"> ';
        $htmltekst .= '<br>';
        return $htmltekst;
    };
    $html = '';
    $html .= enkeleFilmNaarHTML($films[0]);
    $html .= enkeleFilmNaarHTML($films[1]);
    $html .= enkeleFilmNaarHTML($films[2]);
    $html .= enkeleFilmNaarHTML($films[3]);
    echo $html;

    ?>

    <h1>Opdracht 4 vul de webpagina aan</h1>



</body>

</html>