<?php


function countVowels($str) {
    return preg_match_all('/[aeiou]/i', $str);
}


$strings = ["Hello", "World", "PHP", "Programming"];


foreach ($strings as $string) {
    
    $vowelCount = countVowels($string);

 
    $reversed = strrev($string);

    
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversed\n";
}
