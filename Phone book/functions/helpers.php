<?php 

define('BASE_URL','http://localhost/Phone book/');

 function url($url)
  {
    return trim(BASE_URL , '/ ') .'/'.trim($url,'/ ');
  }
//redirect url 
  function redirect($url)
{
    header('Location:'.trim(BASE_URL,'/ ').'/'.trim($url,'/ '));
    exit;
}
?>