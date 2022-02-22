<?php
 
function outputSymbols (string $str, string $symb) : string
{
    $symbAmount = substr_count ($str, $symb);
    $arr = [];
   
    for ($i = 1; $i <= $symbAmount; $i++) {
        $arr[] = $symb;
    }
    
    return implode( ',', $arr );
}
 
echo outputSymbols ("Cъешь ещё этих мягких французских булок, да выпей чаю", "е");