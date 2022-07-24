<?php
 
$firstNumber = 7;
$secondNumber = -12;
$thirdNumber = 19;
 
if ($firstNumber == $secondNumber || $firstNumber == $thirdNumber) {
    echo $firstNumber;
} elseif ($firstNumber > $secondNumber && $firstNumber > $thirdNumber && $secondNumber > $thirdNumber) {
    echo "наибольшее число - $firstNumber, наименьшее число - $.thirdNumber";
} elseif ($firstNumber > $secondNumber && $firstNumber > $thirdNumber && $secondNumber < $thirdNumber) {
    echo "наибольшее число - $firstNumber, наименьшее число - $secondNumber";
} elseif ($secondNumber > $firstNumber && $secondNumber > $thirdNumber && $firstNumber > $thirdNumber) {
    echo "наибольшее число - $secondNumber, наименьшее число - $thirdNumber";
} elseif ($secondNumber > $firstNumber && $secondNumber > $thirdNumber && $firstNumber < $thirdNumber) {
    echo "наибольшее число - $secondNumber, наименьшее число - $firstNumber";
} elseif ($thirdNumber > $firstNumber && $thirdNumber > $secondNumber && $firstNumber > $secondNumber) {
    echo "наибольшее число - $thirdNumber, наименьшее число - $secondNumber";
} else {
    echo "наибольшее число - $thirdNumber, наименьшее число - $firstNumber";
}