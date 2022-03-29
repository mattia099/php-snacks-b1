<?php

  $partite= [
    [
      'casa' => 'Basket Milano',
      'ospite' => 'Basket Roma',
      'punti_casa' => 45,
      'punti_ospite' => 21,
    ],
    [
      'casa' => 'Basket Palermo',
      'ospite' => 'Basket Venezia',
      'punti_casa' => 47,
      'punti_ospite' => 23,
    ],
    [
      'casa' => 'Basket Ancona',
      'ospite' => 'Basket Perugia',
      'punti_casa' => 30,
      'punti_ospite' => 53,
    ],
    [
      'casa' => 'Basket Pisa',
      'ospite' => 'Basket Como',
      'punti_casa' => 33,
      'punti_ospite' => 45,
    ]
  ]


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
    <?php
      for($i = 0; $i < sizeof($partite); $i++){
        echo $partite[$i]['casa'] .' | ' .$partite[$i]['ospite'] ." " .$partite[$i]['punti_casa'] ."-" .$partite[$i]['punti_ospite'];
        echo "<br>";
      }
    ?>
  
</body>
</html>