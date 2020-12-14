<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\stylesheet.css">
    <title>Les 5</title>
</head>

<body>
    <h1>Opdrachten Les 5</h1>
    

    <?php
    $film = [
        'title' => 'Black Panther',
        'year' => 2018,
        'director' => 'Ryan Coogler',
        'stars' => ['Chadwick Boseman', 'Michael B. Jordan'],
        'imageURL' => 'https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_UX182_CR0,0,182,268_AL_.jpg'
    ];

    echo "<table>
    <tr><th>Opdracht 1: Print data uit array</th><th>deze wil niet op de goede plek komen</th></tr>
        <tr> 
        <th>Title</th>
        <th>Year</th>
        <th>Director</th>
        <th>Stars</th>
        <th>Poster</th>
        </tr>
        <tr>
        <td>".$film['title']."</td>
        <td>".strval($film['year'])."</td>
        <td>".$film['director']."</td>
        <td>";
        foreach($film['stars'] as $star){
            echo $star;
            echo " ";
        }
        echo "</td>
        <td><img src='".$film['imageURL']."'></td>
        ";
       echo"";
    ?>
  


<br>


<?php

$films = [
    [
      'title' => 'A Wrinkle In Time',
      'year' => 2018,
      'director' => 'Ava DuVernay',
      'stars' => ['Storm Reid', 'Oprah Winfrey'],
      'imageURL' => 'https://m.media-amazon.com/images/M/MV5BMjMxNjQ5MTI3MV5BMl5BanBnXkFtZTgwMjQ2MTAyNDM@._V1_UX182_CR0,0,182,268_AL_.jpg'
    ],
    [
      'title' => 'Black Panther',
      'year' => 2018,
      'director' => 'Ryan Coogler',
      'stars' => ['Chadwick Boseman', 'Michael B. Jordan'],
      'imageURL' => 'https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_UX182_CR0,0,182,268_AL_.jpg'
    ],
    [
      'title' => 'Tenet',
      'year' => 2020,
      'director' => 'Christopher Nolan',
      'stars' => ['John David Washington', 'Elizabeth Decki'],
      'imageURL' => 'https://m.media-amazon.com/images/M/MV5BYzg0NGM2NjAtNmIxOC00MDJmLTg5ZmYtYzM0MTE4NWE2NzlhXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_UX182_CR0,0,182,268_AL_.jpg'
    ],
    [
      'title' => 'Us',
      'year' => 2018,
      'director' => 'Jordan Peele',
      'stars' => ['Lupita Nyong\'o', 'Winston Duke'],
      'imageURL' => 'https://m.media-amazon.com/images/M/MV5BZTliNWJhM2YtNDc1MC00YTk1LWE2MGYtZmE4M2Y5ODdlNzQzXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_UX182_CR0,0,182,268_AL_.jpg'
    ]
  ];
  echo "<h2>Opdracht 2: Array Slice </h2>";


  $output = array_slice($films,-2,2,true);
  foreach($output as $film){
      echo "De titel: ".$film['title'];
      echo "<br> ";
  }
  echo"<br>";

 
?>

<?php
echo"<h2>Opdracht 3</h2>";
function zetInTabel1($array){
   

    foreach($array as $filmdata){
       // kijken of deze nodig is als je hem wilt voeden met arrays van arrays

    }
}
function zetInTabel($array){
    $html ="";
    $html .= "<table>
    <tr> 
    <th>Title</th>
    <th>Year</th>
    <th>Director</th>
    <th>Stars</th>
    <th>Poster</th>
    </tr>
    <tr>";
    foreach ($array as $array){
        //ZetInTabel($array);
        $html .="  <td>".$film['title']."</td>";
        $html .=" <td>".strval($film['year'])."</td>";
        $html .=" <td>".$film['director']."</td>";
        $html .="<td>";
        foreach($array['stars'] as $star){
            $html .= $star;
            $html .=" ";
        }
        $html .= "</td>";
        $html .=" <td><img src='".$film['imageURL']."'></td>";
       echo"";
    }
    $html .= "</table>";
}
//zetInTabel($film);

?>



</body>

</html>