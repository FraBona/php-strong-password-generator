<?php 

  function randomPassword($lengthPassword){
    if($lengthPassword > 0){
      $wordSymbol = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890.:*/%;';
      $wordSymbol = str_shuffle($wordSymbol);
      $randomPassword = substr($wordSymbol, 0, $lengthPassword);

      return str_shuffle($randomPassword);
    }

  }
?>