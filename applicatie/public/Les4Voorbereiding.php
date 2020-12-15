<?php
/*
  Hier wordt voorbereidend werk gedaan.
  De resultaten kunnen dan vervolgens met eenvoudige stukken PHP-broncode in de HTML geïnjecteerd worden.
  Zo krijgen we zo veel mogelijk scheiding van PHP en HTML-broncode.
  (Zo veel mogelijk scheiding van functionaliteit en presentatie.)
  */

// We declareren en initialiseren een aantal variabelen.
$naam = 'Hogeschool van Arnhem en Nijmegen';
$adres = 'Ruitenberglaan 31'; // String
$postcode = '6826 CC'; // String
$plaats = 'Arnhem';
$html = "$naam<br>$adres<br>$postcode $plaats";
$geslacht = (string)"Man"; // string
$isStudent = (bool)True; // Boolean
$leeftijd = 26; // int


function printOutStringAndLength($input)
{
  echo "<h1>" . $input . "<em>" . strlen($input) . "</em></h1>";
}

function last3Characters($string)
{
  echo substr($string, -3);
}

?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les 4 Voorbereiding</title>
</head>

<body>
  <h1>Les 4 Voorbereiding</h1>
  <h2>HAN adresgegevens!</h2>
  <adress>
    <?php
    echo $html;

    printOutStringAndLength($geslacht);
    last3Characters($naam);

    ?>
    </address>
    <p><strong>Gebruik de ‘Developer Tools’ om vast te stellen dat alle PHP-broncode omgezet is naar HTML!</strong></p>
    <h1>Les 4 Voorbereiding:</h1>
    <p>


      Vragen:
      1. Wat valt je op aan het declareren van variabelen in PHP?
      2. Hoe verschillen functies in PHP met functies of methoden in Java/Processing?
      3. Zijn er meer of minder types te herkennen dan in Java, of evenveel?
      4. Wat gebeurt er met HTML in een PHP-bestand?
      5. Wat is in deze opzet de client?
      6. Wat is in deze opzet de server?
      7. Hoe definieer je in PHP een default-waarde in een functie?

      Antwoorden:
      1. Je hoeft geen datatype op te geven,
      2. Weer geen datatypes en hoeft geen return waarde vooraf in te stellen zoals void
      3. evenveel, PHP probeert ze alleen automatisch te herkennen je kan types wel 'Casten'## Wat gebeurt er met HTML in een PHP-bestand?
      4. Blijft wat het is ( wordt 'geprint als tekst')
      5. Mijn browser
      6. Docker die een webserver draaien.
      7. door binnnen() waardes in te vullen achter de variabelen die je vraagt.

    </p>
</body>

</html>

<html>


</html>