<?php
 
function dividers (int $a) : array
{
    $div = array();
 
    for ($i = 2; $i < abs($a); $i++) {
        if ($a % $i == 0) {
            $div[] = $i;
        }
    }
    return $div;
 }

echo implode(',', dividers (-32));