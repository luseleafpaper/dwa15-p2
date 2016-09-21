<?php 

function get_password($words, $number, $symbol) 
{ 
  echo "You want ".$words." words";
  if ($number=="on") echo " with a number";
  if ($symbol=="on") echo " with a symbol";
  echo ".";


} 
