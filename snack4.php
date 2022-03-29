<!--## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso
numero più di una volta-->

<?php
  $arr=[];
  for($i=0; $i<15 ; $i++){
    do{
      $tmp=rand(0,100);
    }while(in_array( $tmp, $arr ));
    
    $arr[]=$tmp;
    echo $arr[$i];
    echo "<br>";
  }
?>