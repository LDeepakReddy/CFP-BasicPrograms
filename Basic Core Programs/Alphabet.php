<?php

$letter = readline('Enter alphabate : ');
$alphabet = strtolower($letter);

if(is_string($alphabet)){
    
if (
    $alphabet == 'a' || $alphabet == 'e' || $alphabet == 'i' || $alphabet == 'o' || $alphabet == 'u'
)
    echo " alaphabet is Vowel" . "\n";
else
    echo " alphabet is Consonant" . "\n";
}
else{
    echo "Please enter alphabet only";
}
?>