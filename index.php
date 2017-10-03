<?php
//  fonction qui prend en paramètre deux chaînes de caractère et qui retourne la fusion de ces deux chaînes.
function mergeString($string1,$string2){
  // Fusionner les chaînes de caractère des paramètre
  $string = $string1.$string2;
  return $string1;

}
//Appel de la fonction
echo mergeString('Andre',' Victor');
 ?>
