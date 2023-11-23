<?php

// Integer = целые числа
$a = 2;
$b = -10;

// Float = числа с плавающей точкой
// Могут получаться неожиданные результаты при работе с дробями из-за невозможности записать число в десятичном виде. Например 1/3
$c = 1.234;
$d = 5.4E3;
$e = 7e-8;

// Сравнения числовых переменных ( > < == >= <= != )

echo PHP_EOL.'СРАВНЕНИЯ ЧИСЕЛОВЫХ ПЕРЕМЕННЫХ'.PHP_EOL;

$x = 10;
$y = 20;

var_dump($x > $y);
var_dump($x < $y);
var_dump($x == $y);

$x = 10;
$y = 10;

var_dump($x > $y);
var_dump($x < $y);
var_dump($x == $y);
var_dump($x != $y);
var_dump($x >= $y);
var_dump($x <= $y);

// Арифметические операции

echo PHP_EOL.'АРИФМЕТИЧЕСКИЕ ОПЕРАЦИИ С ПЕРЕМЕННЫМИ'.PHP_EOL;

//$a = 2 + 3;
//
//var_dump($a);

$x = 2;
$y = 3;

$a = $x + $y;
var_dump($a);

$b = $x - $y;
var_dump($b);

$c = $x * $y;
var_dump($c);

$d = $x / $y;
var_dump($d);

// Вычисление остатка от деления
echo PHP_EOL.'ОПЕРАЦИЯ ВЗЯТИЯ ОСТАТКА ОТ ДЕЛЕНИЯ'.PHP_EOL;

$e = 15;
$f = 7;
$g = $e % $f;

var_dump($g);

// Инкремент, декремент
echo PHP_EOL.'ИНКЕРМЕНТ ДЕКРЕМЕНТ'.PHP_EOL;
$a = 3;
$b = 2;
$a++; // Пост-инкремент
--$b; // Пре-декремент

var_dump($a);
var_dump($b);

// Инкермент в вычислениях
echo PHP_EOL.'ИНКЕРМЕНТ В ВЫЧИСЛЕНИЯХ'.PHP_EOL;
$a = 4;
$b = 2;
$c = $a + $b--;

var_dump($c, $b);

$a = 4;
$b = 2;
$c = $a + --$b;
var_dump($c, $b);

$a = 2;
$a += 3;
var_dump($a); // 5

$a = $a + 1;
// тождественно
$a += 1;
// тождественно
$a++;