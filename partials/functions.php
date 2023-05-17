<?php
//Funzione controllo numero inserito
function checkNumber(){
  $result = false;

  if(!empty($_GET['inputNumberCaracter']) && ($_GET['inputNumberCaracter'] >= 5) && ($_GET['inputNumberCaracter'] <= 20) && is_numeric($_GET['inputNumberCaracter'])){
    $result = true;
  }
  return $result;
}

function generatePassword($maxLengthPassword){

  if (!$maxLengthPassword) return null;

  $caratteri = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!?&%$<>^+-*/()[]{}@#_=';
  $passwordArray = [];
  $password='';
  for ($i = 0; $i < $maxLengthPassword; $i++) { 
    $carattereEstratto = rand(0,strlen($caratteri) - 1);
    $passwordArray[] = $caratteri[$carattereEstratto];
    //var_dump($passwordArray);
    //var_dump($caratteri[$carattereEstratto]);
  };
  $password = implode($passwordArray);
  //var_dump($password);
  return $password;
};