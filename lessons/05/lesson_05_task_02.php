<?php
 
function outputSymbols (string $str, string $symb) : string
{
    $arr = [];
   
    for ($i = 1; $i <= substr_count ($str, $symb); $i++) {
        $arr[] = $symb;
    }
    
    return implode( ',', $arr );
}
 
echo outputSymbols ("Cъешь ещё этих мягких французских булок, да выпей чаю", "е");