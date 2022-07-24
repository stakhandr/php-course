<?php
 
function dividers (int $a)
{
    $var = abs($a) - 1;
 
    function recursion (int $a, int $var) 
    {
        if ($var <= 1) {
            return false;
        } elseif ($var > 1 && $a % $var == 0) {
            echo "$var \n";
            $var = --$var;
            return recursion ($a, $var);            
        } else {
            $var = --$var;
            return recursion ($a, $var);
        } 
    } 
    $res = recursion ($a, $var);
    if ($a == 0) {
        echo "ноль не имеет делителей";
    } else {
        return $res;
    }   
}
$res = dividers (-12);
echo $res;