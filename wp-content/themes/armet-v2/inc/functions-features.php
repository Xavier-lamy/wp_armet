<?php

function armet_split_string_in_half($string){
    $words = str_word_count($string, 1);
    $half = ceil(count($words)/2);
    $first_part = "";
    $second_part = "";
    for($n=0; $n<$half; $n++) {
        $first_part .= $words[$n]." ";
    };
    for($n=$half; $n<count($words); $n++) {
        $second_part .= $words[$n]." "; 
    };
    return array($first_part, $second_part);
}
