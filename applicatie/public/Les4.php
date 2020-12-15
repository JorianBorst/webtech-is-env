<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les 4 Opdrachten<</title>
</head>

<body>
    <h1>Les 4 Opdrachten</h1>
    <h2>Opdracht 1: Maak nu in je eigen werkomgeving vijf verschillende variabelen aan en benoem de typen in commentaar:</h2>
    <code>
        $adres = "Atlantischestraat";
        $postcode = "8303VT";
        $geslacht = "Man";
        $isStudent = TRUE;
        $leeftijd = 26;
    </code>
    <br>
    <h2>Opdracht 2: Werken met Strings</h2>
    <?php
    function functie1($input)
    {
        echo "<h1>" . $input ."<em>" . strlen($input) . "</em>". "</h1>";
      
    }
    functie1("hallo");
    ?>
    <code>
        function functie1($input){
        echo "<.h1>" . $input ."<./h1>"; echo "<.em>" . strlen($input)."<./em>"; </code> <br>
                <h2>Opdracht 3: gebruik substr</h2>

                <?php
                $school = "Hogeschool Arnhem en Nijmegen";
                function last3Characters($string)
                {
                    echo substr($string, -3);
                }
                function arnhem($string)
                {
                    echo substr($string, -18, 6);
                }
                last3Characters($school);
                arnhem($school);
                ?>
                <code>
                    function last3Characters($string){
                    echo substr($string, -3);
                    }
                    function arnhem($string){
                    echo substr($string, -18,6);
                    }
                </code>
                <br>
                <h2>Opdracht 4</h2>
                <?php
                $titel = "Tenet";
                $lengte = 120;
                $regisseur = "Jorian";
                $hoofdrolspelers = "Levi,Benjamin";

                echo "<h1>De titel van de film is" . $titel . "</h1>";
                echo "<h2>De lengte van de film is" . $lengte . "</h2>";
                echo "<h3>De regisseur van de film is" . $regisseur . "</h3>";
                echo "<h4>De hoofdrol spelers zijn " . $hoofdrolspelers . "</h4>";
                ?>
                <code>
                    echo "<h1>De titel van de film is" . $titel . "</h1>";
                    echo "<h2>De lengte van de film is" . $lengte . "</h2>";
                    echo "<h3>De regisseur van de film is" . $regisseur . "</h3>";
                    echo "<h4>De hoofdrol spelers zijn " . $hoofdrolspelers . "</h4>";
                </code>




                <?php


                // Variabelen aanmaken (variabelen beginnen in PHP met '$')
                // string
                $naam = "Jan Janssen";
                // integer
                $leeftijd = 27;
                // float
                $spaarsaldo = 1050.68;
                // boolean
                $getrouwd = false;

                /*
Bij SPB/SPAD hebben jullie geprogrammeerd in Processing met een statisch getypeerde
programmeertaal.
Dat merk je bijvoorbeeld op het moment dat je in Processing een variabele declareert: je geeft (naast de naam en eventueel een waarde) het type van de variabele op: */
                //int aantal = 50;
                /*
Types van variabelen zijn dus vóór programmauitvoer (tijdens het compileren) bekend, en kunnen niet meer wijzigen.
Een eerste verificatie van het programma (of er bijvoorbeeld nergens strings bij integers worden opgeteld) kan op dat moment al plaatsvinden, waardoor het programma snel is en minder fouten bevat.

PHP daarentegen is een dynamisch getypeerde taal: types hoeven niet worden aangegeven bij het declareren van een variabele.
Het type zal tijdens het uitvoeren van het programma worden afgeleid op basis van de waarde die er in wordt gestopt (type inference).
Dit leidt ertoe dat programma's sneller geschreven kunnen worden, maar mogelijk manifesteren zich fouten tijdens uitvoer.

In bovenstaand voorbeeld is $leeftijd van het type integer omdat 27, een geheel getal, toegekend is.
Tijdens de uitvoering van het programma kun je aan een variabele andere waarden toekennen waardoor ook het datatype verandert.
*/

                // Variabelen aanpassen
                $leeftijd = 27.33;          // integer -> float
                $leeftijd = "27 jaar";      // float -> string
                $leeftijd = false;          // string -> boolean
                /*
Deze wijzigingen van datatype zijn toegestaan bij dynamisch getypeerde talen (PHP in dit geval).
Bij statisch getypeerde talen (bijv. Processing) is dat niet toegestaan.
*/

                // Werken met constanten
                define("PI", "3.15");
                define('PI2', '3.1415');


                //Opdracht 1 
                $adres = "Atlantischestraat";
                $postcode = "8303VT";
                $geslacht = "Man";
                $isStudent = TRUE;
                $leeftijd = 26;

                ?>
</body>

</html>