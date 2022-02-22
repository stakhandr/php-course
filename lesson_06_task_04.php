<?php

function search (array $array, $x)
{
  foreach ($array as $key1 => $val1) {
    if (is_array($val1)){
      foreach ($val1 as $key2 => $val2) {
        if (is_array($val2)) {
          foreach ($val2 as $key3 => $val3) {
            if (is_array($val3)) {
              foreach ($val3 as $key4 => $val4) {
                if ($val4 == $x) {
                  $box[] = $key4;
                }
              }
            } else {
              if ($val3 == $x) {
                $box[] = $key3;
              }
            }
          }
        } else {
          if ($val2 == $x) {
            $box[] = $key2;
          }
        }
      }
    } else {
      if ($val1 == $x) {
        $box[] = $key1;
      }
    }
  }
  if($box) {
    return implode(', ', $box);
  } else {
    return "false";
  }
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

echo search($array, "B");