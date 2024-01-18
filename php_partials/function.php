<?php
  function getCharPool($number, $letter , $symbol){
    $charPool ='qwertyuiopasdfghjklzxcvbnm';

    if(($number)){
      $charPool .= '1234567890';
    }

    if(($letter)){
      $charPool .= 'QWERTYUIOPASDFGHJKLZXCVBNM';
    }

    if(($symbol)){
      $charPool .= '`~!@#$%^&*()_-+={[}}|\:;"\'.?,/';
    }

    return $charPool;

  }

  function generatePassword($length, $repeat_char , $charPool){
    if($length > $charPool || $length < 6 ){ 
      return false;
    }

    $psw = '';

    while( strlen($psw) < $length){
      $random = $charPool[random_int(0, strlen($charPool) - 1)];
      $psw .= $random;

      if($repeat_char){
        $charPool = str_replace( $random , '' , $charPool);
      }
    }

    return $psw;
  };