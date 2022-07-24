<?php
 
function compare (int $a, int $b, int $c) :int 
{
    if ($a == $b && $a== $c && $b == $c) {
        return $a;
    } elseif ($a > $b && $a > $c) {
        return $a;
    } elseif ($b > $c) {
        return $b;
    } else {
        return $c;
    }
}
 
echo compare (7, 12, 19);