<?php
 
function checkPassword (string $pass) : string 
{      
    if (mb_strlen($pass) < 6) {
        return "пароль слишком короткий";
    } elseif (ctype_alpha ($pass) == true || ctype_digit ($pass) == true) {
        return "пароль слишком простой";
    } elseif (ctype_alnum ($pass) == true && preg_match('/[A-Z]/', $pass) == false) {
        return "пароль средней сложности";
    } else {
        return "сложный пароль";
    }     
}
 
echo checkPassword ("34jbs976");