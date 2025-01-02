<?php

// Trolls are attacking your comment section!

// A common way to deal with this situation is to remove all of the vowels from the trolls' comments, neutralizing the threat.

// Your task is to write a function that takes a string and return a new string with all vowels removed.

// For example, the string "This website is for losers LOL!" would become "Ths wbst s fr lsrs LL!".

// Note: for this kata y isn't considered a vowel.


function disemvowel(string $s) {
  
  $x = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
$string = "";
for($i=0; $i<strlen($s);$i++){
    $vowels=false;
    for($j=0; $j<count($x); $j++){
        if($s[$i] === $x[$j]){
           $vowels=true;
            break;
        }
    }
    if(!$vowels){
        $string.=$s[$i];
    }
}



return $string;
}