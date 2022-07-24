<?php

$array = [
    'starwars' => ['Скрытая угроза',
                    'Атака клонов', 
                    'Месть ситхов', 
                    'Новая надежда', 
                    'Империя наносит ответный удар', 
                    'Возвращение джедая'],
    'cinema' => ['sofa' => [[15, 16], [17, 18], [19, 20]],
                'seat' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]],
    'grades' => [['subject' => 'mathematic', 'grade' => 10],
                ['subject' => 'history', 'grade' => 12],
                ['subject' => 'geografic', 'grade' => 11],
                ['subject' => 'english', 'grade' => 9]]
];

ksort($array, SORT_REGULAR);
asort($array['starwars']);
ksort($array['cinema']);
array_multisort(array_column($array['grades'], 'grade'), SORT_DESC, $array['grades']);

print_r($array);