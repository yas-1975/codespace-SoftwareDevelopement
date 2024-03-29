<?php
function replaceVowelsWithX($str,$replacementLetter) {
    // Define an array of vowels
    $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');

    // Replace vowels with the specified replacement letter
    $result = str_replace($vowels, $replacementLetter, $str);

    return $result;
}

echo replaceVowelsWithX("Hello World!","x")
?>
