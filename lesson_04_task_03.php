<?php
 
function recursion (int $a, $b = 2) : string
{    
    if ($a < 1) {
        return "число должно быть больше 0";
    } elseif ($b < $a && $a % $b == 0) {
        return "число не является простым";
    } elseif ($b < $a) {
        $b = ++$b;
        return recursion ($a, $b);
    } else {
        return "число является простым";
    }
}     
 
echo recursion (7);