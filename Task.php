<?php
echo "Задача 1: ";

echo "\n";

echo "Задача 2: ";
//Правило loverCamelCase
//1.Первое слово начинается с маленькой буквы.
//2.Каждое последующее слово в составе имени пишется с заглавной буквы.
//3.Слова соединяются без использования пробелов, дефисов или подчёркиваний.
echo $channelName = "Название телеканала ";
echo $manufacturerAddress = "Адрес производителя ";
echo $carColor = "Цвет автомобиля ";
echo $waterTemperature = "Температура воды ";
echo $phoneModel = "Модель телефона";
echo "\n";

echo "Задача 3: \n";
$var1 = 3;
$var2 = 5;
$var3 = 8;
echo "Значение переменной var1: $var1\n";
echo "Значение переменной var2: $var2\n";
echo "Значение переменной var3: $var3\n";

$sum = $var1 + $var2 + $var3;
echo "Сумма переменных: $sum\n";

$result = 2 + 6 + 2 / 5 - 1;
echo "Результат выражения: $result\n";

echo "\n";

echo "Задача 4: \n";
$a = 1;
$b = 2;
echo "a: $a, b: $b\n";

$c = $a;
$d = &$b;
echo "c: $c, d: $d\n";

$a = 3;
$b = 4;
echo "a: $a, b: $b, c: $c, d: $d\n";
echo "\n";

echo "Задача 5: \n";
define("CONST1", 41);
define("CONST2", 33);

$sumConstants = CONST1 + CONST2;
echo "Сумма констант: $sumConstants\n";
//Warning: Constant CONST1 already defined
define("CONST1", 50);
echo "\n";

echo "Задача 6: \n";
$a = 152;
$b = '152';
$c = 'London';
$d = array(152);
$e = 15.2;
$f = false;
$g = true;
echo "Тип переменной a: " . gettype($a) . "\n";
echo "Тип переменной b: " . gettype($b) . "\n";
echo "Тип переменной c: " . gettype($c) . "\n";
echo "Тип переменной d: " . gettype($d) . "\n";
echo "Тип переменной e: " . gettype($e) . "\n";
echo "Тип переменной f: " . gettype($f) . "\n";
echo "Тип переменной g: " . gettype($g) . "\n";
echo "\n";

echo "Задача 7:";
$a = "Привет";
$b = "мир";
$stringResult = $a . ", " . $b . "!";
echo $stringResult;
echo "\n";

echo "Задача 8: \n";
$greeting = "Доброе утро";
$ladies = "дамы";
$gentlemen = "и господа";

echo $greeting . "\n";
echo $ladies . "\n";
echo $gentlemen . "\n";

$resultString = $greeting . ', ' . $ladies . ' ' . $gentlemen;
echo $resultString . "\n";
echo "\n";

echo "Задача 9: \n";
$array1 = array(0 => '1', 1 => '2', 2 => '3', 3 => '4', 4 => '5');
$array1['element'] = '6';

$array2 = array(0 => 'A', 1 => 'B', 2 => 'C', 3 => 'D', 4 => 'E');
unset($array2[0]);

echo "Элемент с индексом 2 в массиве 1: " . $array1[2] . "\n";
echo "Элемент с индексом 2 в массиве 2: " . $array2[2] . "\n";

echo "Массив 1: ";
print_r($array1);
echo "Массив 2: ";
print_r($array2);

$countArray1 = count($array1);
$countArray2 = count($array2);
echo "Количество элементов в массиве 1: " . $countArray1 . "\n";
echo "Количество элементов в массиве 2: " . $countArray2 . "\n";
echo "\n";

echo "Задача 10: \n";
$N = 10;

for ($i = 0; $i < $N; $i++) {
    $randomNumber = mt_rand(-21, 35);
    echo $randomNumber . "\n";
    $sum += $randomNumber;
}
echo "\n";

echo "Задача 11: ";
echo "Сумма чисел: " . $sum . " Из предыдущего";
echo "\n";

echo "Задача 12: \n";
$N = 10;
$prevNumber = mt_rand(-100, 100);
for ($i = 0; $i < $N; $i++) {
    $currentNumber = mt_rand(-100, 100);
    $comparison = ($currentNumber > $prevNumber) ? "больше" : "меньше";
    echo $currentNumber . " - " . $comparison . " предыдущего числа\n";
    $prevNumber = $currentNumber;
}
echo "\n";

echo "Задача 13: ";
function fibonacci($n) {
    if ($n <= 0) {
        return "Некорректный ввод";
    } elseif ($n == 1) {
        return 0;
    } elseif ($n == 2) {
        return 1;
    } else {
        $fib = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib[$n - 1];
    }
}
$n = 8;
echo "n-ное число Фибоначчи с n = $n: " . fibonacci($n) . "\n";
echo "\n";

echo "Задача 14: ";
$number = 12345;
echo "Исходное число: $number\n";
echo "Цифры в обратном порядке: ";

while ($number > 0) {
    $digit = $number % 10;
    echo $digit;
    $number = (int)($number / 10);
}
echo "\n";

echo "Задача 15: ";
$number = 24681;
$oddDigits = '';
echo "Исходное число: $number\n";
echo "Нечетные цифры в обратном порядке: ";
while ($number > 0) {
    $digit = $number % 10;
    if ($digit % 2 != 0) {
        $oddDigits = $digit . $oddDigits;
    }
    $number = (int)($number / 10);
}
if (!empty($oddDigits)) {
    echo $oddDigits . "\n";
} else {
    echo "Нечетных цифр не обнаружено!\n";
}
echo "\n";

echo "Задача 16: ";
$array = [];
for ($i = 0; $i < 7; $i++) {
    $array[] = mt_rand(-100, 100);
}
echo "Элементы массива:";
foreach ($array as $value) {
    echo $value . ", ";
}
echo "\n";

echo "Задача 17: ";
define('M', 3); // Количество строк
define('N', 4); // Количество столбцов
$array = [];

for ($i = 0; $i < M; $i++) {
    for ($j = 0; $j < N; $j++) {
        $array[$i][$j] = mt_rand(-100, 100);
    }
}
echo "Двумерный массив " . M . "x" . N . ":\n";
for ($i = 0; $i < M; $i++) {
    for ($j = 0; $j < N; $j++) {
        echo $array[$i][$j] . "\t";
    }
    echo "\n";
}
echo "\n";

echo "Задача 18: \n";
$N = 5;

$num = 1;
echo "C Использованием массива \n";
$tree = [];
for ($i = 1; $i <= $N; $i++) {
    $row = [];
    for ($j = 1; $j <= $i; $j++) {
        $row[] = $num;
        $num++;
    }
    $tree[] = $row;
}

foreach ($tree as $row) {
    echo implode(' ', $row) . "\n";
}
$num = 1;
echo "без Использованием массива \n";
for ($i = 1; $i <= $N; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }
    echo "\n";
}
echo "\n";

echo "Задача 19: \n";
$N = 10;
$array = [];
for ($i = 0; $i < $N; $i++) {
    $array[] = mt_rand(-100,100);
}
$maxNumber = max($array);
echo "Массив: " . implode(', ', $array) . "\n";
echo "Максимальное число: $maxNumber\n";
echo "\n";

echo "Задача 20: \n";
$array = [];
for ($i = 0; $i < 20; $i++) {
    $array[] = mt_rand(-100,100);
}
$minNumber = min($array);
echo "Массив: " . implode(', ', $array) . "\n";
echo "Минимальное число: $minNumber\n";
echo "\n";

echo "Задача 21: \n";
$array1 = [];
$array2 = [];
for ($i = 0; $i < 20; $i++) {
    $array1[] = mt_rand(-10, 10); 
    $array2[] = mt_rand(-10, 10);
}
echo "Массив 1: " . implode(', ', $array1) . "\n";
echo "Массив 2: " . implode(', ', $array2) . "\n";
$length = min(count($array1), count($array2));
echo "Результаты сравнения:\n";

for ($i = 2, $j = 1; $i < $length; $i += 3, $j += 2) {
    $element1 = $array1[$i];
    $element2 = $array2[$j];
    if ($element1 > $element2) {
        echo "$element1 > $element2\n";
    } elseif ($element1 < $element2) {
        echo "$element1 < $element2\n";
    } else {
        echo "$element1 = $element2\n";
    }
}
echo "\n";

echo "Задача 22: \n";
function processNumbers(array $numbers)
{
    foreach ($numbers as $number) {
        switch ($number) {
            case 5:
                echo "пять\n";
                break;
            case 6:
                echo "шесть\n";
                break;
            case 7:
                echo "7\n";
                break;
            default:
                echo "какое-то другое число\n";
                break;
        }
    }
}

$randomNumbers = [];
for ($i = 0; $i < 10; $i++) {
    $randomNumbers[] = mt_rand(5, 12);
}
processNumbers($randomNumbers);
echo "\n";

echo "Задача 23: \n";
$a = [];
for ($i = 0; $i < 10; $i++) {
    $a[] = mt_rand(1, 20);
}
$b = [12, 5, 17, 6, 4];
echo "Массив a: " . implode(', ', $a) . "\n";
echo "Массив b: " . implode(', ', $b) . "\n";

$diff1 = array_diff($a, $b);
echo "без использования in_array(): " . implode(', ', $diff1) . "\n";

$diff2 = [];
foreach ($a as $value) {
    if (!in_array($value, $b)) {
        $diff2[] = $value;
    }
}
echo "C использованием in_array(): " . implode(', ', $diff2) . "\n";
echo "\n";

?>