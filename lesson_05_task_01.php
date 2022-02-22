<?php
 
function replaceSymbol (string $str, string $sym) : string
{
    $stringUp = mb_strtoupper ($str);
    $pos = mb_stripos($stringUp, $sym);
    $newSym = mb_substr($stringUp, $pos, 1); 
    $newString = str_ireplace($sym, $newSym, $str);
    
    return $newString;
}
 
echo replaceSymbol ("Cъешь ещё этих мягких французских булок, да выпей чаю", "к");