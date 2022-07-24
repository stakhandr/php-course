<?php
        
function pyramid (string $text) : string
{
    $arr1 = mb_str_split($text);
    $arr2 = [];
 
    for ($i = mb_strlen ($text) - 1; $i >= 0; $i--) {
        $arr2[] = $arr1[$i];
    }
    
    return implode($arr2);
}
 
echo pyramid ("кракозябл");