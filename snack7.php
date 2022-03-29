<!--## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome
e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni
alunno.-->

<?php
  $alunni = [
    [
      'nome' => 'Mario',
      'cognome' => 'Rossi',
      'voti' => [
        'italiano' => 7,
        'matematica' => 8,
        'inglese' => 7,
        'informatica' => 9,
      ]
    ],
    [
      'nome' => 'Franco',
      'cognome' => 'Verdi',
      'voti' => [
        'italiano' => 7,
        'matematica' => 4,
        'inglese' => 5,
        'informatica' => 6,
      ]
    ],
    [
      'nome' => 'Giulia',
      'cognome' => 'Gialli',
      'voti' => [
        'italiano' => 9,
        'matematica' => 5,
        'inglese' => 6,
        'informatica' => 8,
      ]
    ],
  ];

  var_dump($alunni);
  echo "<br>";

  for( $i=0; $i<count($alunni); $i++ ){
    echo $alunni[$i]['nome'] ." " .$alunni[$i]['cognome'] ." Media voti = ";
    $sum=0;
    $media=0;
    $c=0;
    foreach($alunni[$i]['voti'] as $voto){
      $sum+=$voto;
      $c++;
    }
    echo $sum/$c;
      echo "<br>";
  }
?>