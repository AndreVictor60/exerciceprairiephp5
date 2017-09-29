<?php
//  fonction qui prend en paramètre deux chaînes de caractère et qui retourne la fusion de ces deux chaînes.
function mafonction($var1,$var2){
  echo "Votre nom est  ".$var1. " et votre prénom est ".$var2."<br />";
  // Fusionner les chaînes de caractère des paramètre
  $fusion = $var1.$var2;
  echo "La fusion est ".$fusion;

}
//Appel de la fonction
mafonction("Andre","Victor");
 ?>
