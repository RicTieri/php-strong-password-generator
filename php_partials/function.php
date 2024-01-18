<?php
  function generatePassword($length){
    $charPool = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890`~!@#$%^&*()_-+={[}}|\:;"\'.?,/';

    if($length > $charPool || $length < 6 ){ 
      return 'lunghezza non supportata';
    }

    $psw = '';

    while( strlen($psw) < $length){
      $random = $charPool[random_int(0, strlen($charPool) - 1)];
      $psw .= $random;
      $charPool = str_replace( $random , '' , $charPool);
    }

    return $psw;
  };