<?php
 
function dayCalc (int $a) :string 
{
    if ($a > 0 && $a < 8) {
        switch ($a) {
            case 1: return "понедельник"; break;
            case 2: return "вторник"; break;
            case 3: return "среда"; break;
            case 4: return "четверг"; break;
            case 5: return "пятница"; break;
            case 6: return "суббота"; break;   
            case 7: return "воскресенье"; break;          
        }  
    } else {
        return "число не входит в заданный диапазон";
    }       
}
 
echo dayCalc (4);