<?php 

  function randomPassword(){
    $lengthPassword = $_GET['password'];

    $wordSymbol = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890.:*/%;';
    $wordSymbol = str_shuffle($wordSymbol);
    $randomPassword = substr($wordSymbol, 0, $lengthPassword);

    return str_shuffle($randomPassword);
  }
?>