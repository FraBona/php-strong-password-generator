<?php 

  include 'functions.php';
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