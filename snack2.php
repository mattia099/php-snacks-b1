<?php 
if( isset($_GET['name']) && strlen($_GET['name'])>3 ){
  $name = $_GET['name'];
  echo $name;
  echo "<br>";
  $access1 = true;
}else{
  echo "Inserisci nome correttamente";
  echo "<br>";
  $access1 = false;
}

if( (isset($_GET['email'])) && (strpos($_GET['email'], '.') !== false) && (strpos($_GET['email'], '@') !== false) ){
  $email = $_GET['email'];
  echo $email;
  echo "<br>";
  $access2 = true;
}else{
  echo "Inserisci email correttamente";
  echo "<br>";
  $access2 = false;
}

if( isset($_GET['age']) && is_numeric($_GET['age']) ){
  $age= $_GET['age'];
  echo $age;
  echo "<br>";
  $access3 = true;
}else{
  echo "Inserisci età correttamente";
  echo "<br>";
  $access3 = false;
}

if( $access1 == true && $access2 == true && $access3 == true){
  echo "Accesso riuscito";
}else{
  echo "Accesso negato";
}
?>
<!-- 
  Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo
  nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una
  chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack2</title>
</head>
<body>
  
</body>
</html>