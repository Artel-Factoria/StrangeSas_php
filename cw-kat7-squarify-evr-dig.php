<?php
function square_digits($num): int {
  $num_ar = str_split($num); //separating number
  for($i = 0; $i < count($num_ar); $i++){
    $num_ar[$i] = pow($num_ar[$i], 2); //and squaring that number
  }
  return implode("", $num_ar);
}
?>