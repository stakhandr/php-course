<?php
 
function compare (string $str1, string $str2) : string 
{
    $arr1 = mb_str_split($str1);
    $arr2 = mb_str_split($str2);
 
    $num1 = count($arr1);
    $num2 = count($arr2);
    
    $length = $max = 0;
    
    if ($num1 <= $num2) {
        $length = $num1;
        $max = $num2;
    } else {
        $length = $num2;
        $max = $num1;
    }
    
    $overlap = [];
    
    for ($i = 0; $i < $length; $i++) {
        if ($arr1[$i] == $arr2[$i]) {
            $overlap[] = 1;
        }
    }
    $res = round(count($overlap) * 100 / $max);
    return "строки совпадают на $res%";
}
 
echo compare ("отрывочек", "обрывок");