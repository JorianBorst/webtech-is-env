<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $vegetarisch = false;
    $glutenvrij = false;
    //opdracht 1
    if (!$vegetarisch && !$glutenvrij) {
        echo 'Biefstuk';
    }
    if (!$vegetarisch && $glutenvrij) {
        echo 'spareribs';
    }
    if ($vegetarisch && !$glutenvrij) {
        echo 'Broodje broccoli';
    }
    if ($vegetarisch && $glutenvrij) {
        echo 'soepstengel';
    }

    // opdracht 2
    echo "<br>";
    echo "<br>";
    echo "<br>";
  
    $cijfers = [5, 9, 3, 5, 6, 10, 2, 4];
  // a for loop
    for($i = 0; $i < count($cijfers); $i++){
        if($cijfers[$i] >= 5.5){
            $cijfer = "voldoende";
        } else {
            $cijfer = "onvoldoende";
        }
    }


  // b foreach loop
    foreach ($cijfers as $cijfer) {
        if ($cijfer >= 5.5) {
            $cijfer = "voldoende";
        } else {
            $cijfer = "onvoldoende";
        }
    }

    // opdracht 3

    $myFavorites = [
        'Color' => 'Blue',
        'Band' => 'Nirvana',
        'Course' => 'WTIS'
      ];

      print_r($myFavorites);

      echo "<br>";
      echo "<br>";
      echo "<br>";

      function printFavorites($array){
        $html ="";
        $html .= "<table>
        <tr> 
        <th>Color</th>
        <th>Band</th>
        <th>Course</th>
        </tr>
        <tr>";
        $html .="<th>".$array['Color']."</th>";
        $html .="<th>".$array['Band']."</th>";
        $html .="<th>".$array['Course']."</th>";
        $html .="</tr></table>";
        echo $html;
      }

      printFavorites($myFavorites);

      echo "<br>";
      echo "<br>";
      echo "<br>";

     $myFavorites = [
        'Color' => 'Blue',
        'Band' => 'Nirvana',
        'Course' => 'WTIS'
      ];





    ?>

</body>

</html>