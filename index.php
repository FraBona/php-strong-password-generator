<?php 

  function randomPassword(){
    $lengthPassword = $_GET['password'];

    $wordSymbol = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890.:*/%;';
    $wordSymbol = str_shuffle($wordSymbol);
    $randomPassword = substr($wordSymbol, 0, $lengthPassword);

    return str_shuffle($randomPassword);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="GET">
    <input type="number" name="password">
    <input type="submit" value="invia">
  </form>
  <p><?php echo randomPassword()?></p>
</body>
</html>