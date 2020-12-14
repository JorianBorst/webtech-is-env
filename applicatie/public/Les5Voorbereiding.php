<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les 5 voorbereiding</title>
</head>

<body>
    <h1>Les 5 voorbereiding</h1>
    <h2>Opdracht 1</h2>
    <?php
    $lijst = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $lijst2 = [6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
    array_merge($lijst, $lijst2);

    $film1 = array("regisseur", "releasedatum", "titel", "hoofdrolspelers");


    echo "<h1>De titel van de film is " . $film1[0] . "</h1>";
    echo "<h2>De lengte van de film is " . $film1[1]  . "</h2>";
    echo "<h3>De regisseur van de film is " . $film1[2]  . "</h3>";
    echo "<h4>De hoofdrol spelers zijn " . $film1[3]  . "</h4>";
    ?>
    <code>
        $film = array("regisseur","releasedatum","titel","hoofdrolspelers");

        echo "<h1>De titel van de film is " . $film[0] . "</h1>";
        echo "<h2>De lengte van de film is " .$film[1] . "</h2>";
        echo "<h3>De regisseur van de film is " . $film[2] . "</h3>";
        echo "<h4>De hoofdrol spelers zijn " . $film[3] . "</h4>";

    </code>

    <br>
    <h2>Opdracht 2: Functies in een andere file</h2>


    <?php
    $film = [
        'regisseur' => 'Jorian',
        'releasedatum' => '1/1/2020',
        'titel' => 'tenet',
        'hoofrolspelers' => 'Levi,Benjamin',
        'duur' => 120
    ];
    require_once('functies.php');
    echo "deze film duurt " . $uur . " uur";
    ?>
    <code>
        $film = [
        'regisseur' => 'Jorian',
        'releasedatum' => '1/1/2020',
        'titel' => 'tenet',
        'hoofrolspelers' => 'Levi,Benjamin',
        'duur' => 120
        ];

        function minutenNaarUur($input){
        return $input / 60;
        }
    </code>
</body>

</html>