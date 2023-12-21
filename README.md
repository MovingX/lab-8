<h1 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<p align="center">Лабораторная работа №8"Разработка серверных скриптов"</p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p align="right">Выполнил: Морошкин Максим Александрович</p>
<p align="right">Проверил: Соболев Е. И.</p>
<br>
<br>
<br>
<br>
<br>
<br>

<p align="center">г. Южно-Сахалинск <br> 2023 год</p>

<h2 align="center">Введение</h2>
<p align="justify">Разработка серверных скриптов</p>

<h2>Цели и задачи</h2>
1.	Создать файл php. В начале файла добавить 2 комментария (однострочный и многострочный) с именем автора и датой выполнения. Напечатать приветствие при помощи echo.<br>
2.	Придумайте и запишите имена переменных для таких сущностей: название телеканала, адрес производителя, цвет автомобиля, температура воды, модель телефона. Следуйте правилам именования переменных. Используйте lowerCamelCase для имен, составленных из двух и более слов.<br>
3.	Создайте 3 переменных с произвольными именами на свой выбор. Присвойте им значения 3, 5, 8 соответственно. Выведите значения этих переменных на страницу. Найдите сумму этих переменных и запишите ее в новую переменную. Выведите значение новой переменной. Найдите значение такого выражения: 2+6+2/5-1. Запишите его в переменную с именем $result и выведите на страницу.<br>
4.	Будем использовать переменные $a, $b, $c, $d. Задайте значения 1 и 2 переменным $a, $b соответственно. Выведите значения переменных $a, $b. Скопируйте значение переменной $a в переменную $c. Скопируйте переменную $b в переменную $d по ссылке. Распечатайте значения переменных $c, $d. Присвойте переменным $a, $b значения 3 и 4 соответственно. Распечатайте переменнные $a, $b, $c, $d. Сделайте выводы относительно полученных результатов.<br>
5.	Создайте 2 константы с произвольными именами со значениями 41 и 33. Найдите и выведите сумму этих констант. Попытайтесь переопределить одну из констант. Внимательно прочтите подсказку об ошибке в Вашей IDE (если поддерживается).<br>
6.	Определите типы следующих переменных и выведите их на экран: <br>
$a = 152;<br>
$b = '152';<br>
$c = 'London'; $d = array(152); $e = 15.2;<br>
$f = false;<br>
$g = true; <br>
7.	Написать код, который будет формировать строку и выводить ее на экран, подставляя в нее значения переменных $a и $b. <br>
8.	Определить три переменных со значениями: “Доброе утро” “дамы” “и господа”. Вывести значения переменных в браузер. Сформировать строку "Доброе утро, дамы и господа" используя созданные переменные и  комбинированный оператор склеивания. <br>
9.	Создать 2 простых массива с количеством элементов 5.  В первый массив добавить один элемент с индексом (!) element и произвольным значением. Из второго массива удалить элемент с индексом 0. Используйте функцию unset();  Вывести на экран элементы под индексом 2 из первого и второго массива.  Вывести на экран содержимое массивов полностью.  Найти количество элементов в каждом массиве. Используйте функцию count(). Вывести результаты на экран. <br>
10.	 Вывести на экран N случайных чисел (каждое с новой строки) из диапазона [-21, 35]<br>
11.	Вывести на экран сумму N случайных чисел.<br>
12.	Вывести на экран N случайных чисел (каждое с новой строки). Для каждого числа, начиная со второго, рядом выводить - больше ли оно предыдущего или меньше. <br>
13.	Вывести на экран n-ное число Фибоначчи. <br>
14.	Дано некоторое число длиной от 1 до 5 цифр - вывести его цифры в обратном порядке. Подсказка: используйте цикл while и операцию получения остатка.<br>
15.	Дано некоторое число длиной от 1 до 5 символов, вывести все его "нечётные" цифры в обратном порядке (аналогично предыдущей задаче), если же таких цифр не найдёт, вывести сообщение "Нечетных цифр не обнаружено!"<br>
16.	Задать массив из 7-ми элементов, заполнить его случайными значениями в одном цикле, а в другом цикле вывести эти значения на экран.<br>
17.	Задать двумерный массив размерностью m на n (MxN) элементов (m и n вынести в область определения констант), заполнить его случайными значениями и вывести их на экран уже после того, как весь массив будет заполнен (т.е. заполнять и выводить в разных группах циклов).<br>
18.	Задайте случайным образом массив из N элементов. Выведите его на экран "ёлочкой". Вот начало такого вывода:<br>
1 <br>
2 3<br>
4 5 6<br>
7 8 9 10<br>
11 12 ......<br>
Второй вариант - сделайте то же самое, но не используйте массив: у вас есть переменная N, выведете на экран, все числа до N, по тому же принципе что и выше, например, если N=9, то получим:<br>
1 <br>
2 3<br>
4 5 6<br>
7 8 9 10<br>
11 12 ......<br>
19.	Задайте случайным образом массив из N элементов (целых чисел). Найдите максимальное число и напечатайте его.<br>
20.	Задайте случайным образом массив из 20-ти элементов (целых чисел). Найдите минимальное число и напечатайте его.<br>
21.	Даны два массива по 20 элементов каждый (заполните случайными числами, так чтобы среди элементов массива при очередном запуске программы могли встретиться и отрицательные и положительные числа). Сравните каждый 3-ий элемент 1-ого массива с каждый 2-ым элементов 2-ого массива - сравнение проводите пока не закончится та выборка, которая короче.<br>
22.	Создайте функцию, которая принимает на вход массив случайных чисел из диапазона [5..12]. Обходит этот массив и делает для каждого элемента следующее (пусть она оказывает побочный эффект прямо в своём теле): Если это число равно 5 -- то выведете на экран строку "пять", если 6 -- то строку "шесть", если 7 то число "7", иначе -- строку "какое-то другое число". Используйте для решения задачи оператор switch(link is external)<br>
23.	Есть два массива "a" и "b". На вход вашей программе подаётся массив "a" случайных чисел (10 элементов) из диапазона от 1 до 20. Задача: вывести на экран все числа, которые не содержатся в массиве "b" 1	$b = [12, 5, 17, 6, 4]; Решите эту задачу двумя способами: Без использования in_array()(link is external). С использованием in_array() <br>

<h4>Задачи Node JS</h4>
24.	Реализуйте функцию, которая будет парсить JSON-файлы и выводить их содержимое в консоль.<br>
25.	Напишите скрипт, который будет перебирать файлы в заданной директории и выводить их имена в консоль.<br>
26.	Реализуйте функцию, которая будет отправлять email-уведомления при определенных событиях.<br>
27.	Создайте модуль для работы с API сторонних сервисов (например, Google Maps).<br>
28.	Создайте модуль для работы с графическими изображениями (обработка, изменение размеров и т.д.).<br>

<h2>Решение задач</h2>

<h3>Задачи на php</h3>
Используем интерпретатор онлайн для php https://onlinephp.io/ <br>

```php
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
```
<h3>Задачи на node.js</h3>

<h4>24.	Реализуйте функцию, которая будет парсить JSON-файлы и выводить их содержимое в консоль.</h4>

```js
const fs = require('fs');
const path = require('path');


function parseJSONfiles(directoryPath) {
    try {
        const files = fs.readdirSync(directoryPath);
        files.forEach(file => {
            const filePath = path.join(directoryPath, file);
            if (fs.statSync(filePath).isFile() && path.extname(filePath) === '.json') {
                console.log(`Содержимое файла ${file}:`);
                parseJSONfile(filePath);
                console.log('\n');
            }
        });
    } catch (error) {
        console.error(`Ошибка при чтении директории: ${error.message}`);
    }
}

function parseJSONfile(filePath) {
    try {
        const jsonData = fs.readFileSync(filePath, 'utf-8');
        const parsedData = JSON.parse(jsonData);
        console.log(JSON.stringify(parsedData, null, 2));
    } catch (error) {
        console.error(`Ошибка при парсинге JSON файла ${filePath}: ${error.message}`);
    }
}

const directoryPath = path.join(__dirname, 'jsonfile');
parseJSONfiles(directoryPath);

const emailModule = require('./task26');
emailModule.sendEmail('*******@mail.ru', 'Тема: Скрипт 24', 'Текст: Был выполнен скрипт из задачи 24');

```

<h4>25.	Напишите скрипт, который будет перебирать файлы в заданной директории и выводить их имена в консоль.</h4>

```js
const fs = require('fs');
const path = require('path');

function listFilesInDirectory(directoryPath) {
    try {
        const files = fs.readdirSync(directoryPath);
        console.log(`Список файлов в директории ${directoryPath}:`);
        files.forEach(file => {
            console.log(file);
        });
    } catch (error) {
        console.error(`Ошибка при чтении директории: ${error.message}`);
    }
}
const directoryPath = path.join(__dirname, 'jsonfile');
listFilesInDirectory(directoryPath);

const emailModule = require('./task26');
emailModule.sendEmail('*******@mail.ru', 'Тема: Скрипт 25', 'Текст: Был выполнен скрипт из задачи 25');

```

<h4>26.	Реализуйте функцию, которая будет отправлять email-уведомления при определенных событиях.</h4>

```js
const nodemailer = require('nodemailer');
const transporter = nodemailer.createTransport({
    host: 'smtp.rambler.ru',
    port: 465,
    auth: {
        user: '*******@rambler.ru',
        pass: '*******',
    }
});

function sendEmail(toEmail, subject, text) {
    const mailOptions = {
        from: '********@rambler.ru',
        to: toEmail,
        subject: subject,
        text: text,
    };

    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            console.error('Ошибка отправки письма:', error);
        } else {
            console.log('Письмо успешно отправлено:', info.response);
        }
    });
}

module.exports = {
    sendEmail,
};

```

<h4>27.	Создайте модуль для работы с API сторонних сервисов (например, Google Maps).</h4>

Модуль ApiModule

```js
const axios = require('axios');

async function predictInfo(name) {
    try {
        //Agify API для предсказания возраста
        const agifyResponse = await axios.get(`https://api.agify.io?name=${encodeURIComponent(name)}`);
        const agifyResult = agifyResponse.data;

        //Genderize API для предсказания пола
        const genderizeResponse = await axios.get(`https://api.genderize.io?name=${encodeURIComponent(name)}`);
        const genderizeResult = genderizeResponse.data;

        return {
            name,
            age: agifyResult.age,
            gender: genderizeResult.gender
        };
    } catch (error) {
        console.error(error);
        throw new Error('Внутренняя ошибка сервера.');
    }
}

module.exports = {
    predictInfo,
};
```

Использование Модуля

```js
const readline = require('readline');
const apiModule = require('./ApiModule');

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

function promptForName() {
    rl.question('Введите имя: ', async (name) => {
        try {
            const result = await apiModule.predictInfo(name);
            console.log('Результат предсказания:', result);
            rl.close();
        } catch (error) {
            console.error(error.message);
            rl.close();
        }
    });
}

promptForName();

const emailModule = require('./task26');
emailModule.sendEmail('**********@mail.ru', 'Тема: Скрипт 27', 'Текст: Был выполнен скрипт из задачи 27');
```

<h4>28.	Создайте модуль для работы с графическими изображениями (обработка, изменение размеров и т.д.).</h4>

Модуль imageModule

```js
const Jimp = require('jimp');

async function resizeImage(inputPath, outputPath, width, height) {
    try {
        const image = await Jimp.read(inputPath);
        await image.resize(width, height);
        await image.writeAsync(outputPath);
        console.log(`Изображение успешно изменено: ${outputPath}`);
    } catch (error) {
        console.error(`Ошибка при изменении размеров изображения: ${error.message}`);
        throw error;
    }
}

module.exports = {
    resizeImage,
};

```
Использование Модуля

```js
const imageModule = require('./imageModule');

const inputImagePath = 'Mops.jpg'; 
const outputImagePath = 'new_Mops.jpg'; 
const targetWidth = 1200;
const targetHeight = 1200;

imageModule.resizeImage(inputImagePath, outputImagePath, targetWidth, targetHeight);

const emailModule = require('./task26');
emailModule.sendEmail('***********@mail.ru', 'Тема: Скрипт 28', 'Текст: Был выполнен скрипт из задачи 28');
```

<h2>Вывод</h2>
Я научился работать с php (Функциями, массивами, переменными, ссылками, разными циклами). Я научился создавать модули на node.js и подключать их

