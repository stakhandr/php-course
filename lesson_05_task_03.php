<?php
        
function pyramid (string $sym, int $num) : string
{
    $arr = [];
   
    for ($i = 1; $i <= $num; $i++) {
        $str = str_repeat ($sym, $i);
        $arr[$i] = $str;
    }
    
    return implode("\n", $arr);
}
 
echo pyramid ("#", 5);
