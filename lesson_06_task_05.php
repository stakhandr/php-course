<?php

function search (array $array, $x) : mixed
{
    static $k = false;
  foreach ($array as $key => $val) {
    if (is_array($val)){
       search ($val, $x);      
    } elseif ($val == $x) {
        $k = $key;
    }
  }
  return $k;
}

$array = [
    'starwars' => ['Скрытая угроза',
                    'Атака клонов',
                    'Месть ситхов',
                    'Новая надежда',
                    'Империя наносит ответный удар',
                    'Возвращение джедая'],
    'cinema' => ['sofa' => [[15, 16], [17, 18], [19, 20]],
                'seat' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]],
    'grades' => [['subject' => 'mathematic', 'grade' => "B"],
                ['subject' => 'history', 'grade' => "A"],
                ['subject' => 'geografic', 'grade' => "B"],
                ['subject' => 'english', 'grade' => "C"]]
];

var_dump (search($array, "B"));
