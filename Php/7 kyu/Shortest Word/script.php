<?php
  
function findShort(string $str): int{
  
  $words = explode(" ", $str);

  $min_length = strlen($words[0]);

for($i = 1; $i < count($words); $i++){
   if(strlen($words[$i]) < $min_length){
    $min_length = strlen($words[$i]);
}

}
return $min_length;
}

$str = "bitcoin take over the world maybe who knows perhaps";

echo findShort($str);