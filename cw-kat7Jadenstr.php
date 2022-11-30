<?php
function toJadenCase($string) {
  $stringParts = explode(" ", $string);
   for ($i = 0; $i < count($stringParts); $i++){
     $stringParts[$i] = ucfirst($stringParts[$i]);
   }
  return implode(" ", $stringParts);
}
?>