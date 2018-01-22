<?php
//Задача 1 
//Создать функцию с аргументом для вывода приветствия. Установить значение по умолчанию для аргумента равное «Гость» 


function greeting($name='Гость') {
    echo "Hello, $name !";
}

greeting();


echo "<br><br> Задача 2 <br>"; 
//Допустим, пользователь вводит названия городов через пробел. Вы их присваиваете переменной. 
//Переставьте названия так, чтобы названия были упорядочены по алфавиту. 

function sortCities ($strCities) {
    $val = explode(" ", $strCities);
    sort($val, SORT_STRING);
    return $val;
}

var_dump(sortCities("Tallinn Oslo S-Peterburg Moscow"));

echo "<br><br> Задача 3 <br>"; 
//Написать функцию - конвертер строки. 
//Возможности: 
//перевод всех символов в верхний регистр, 
//перевод всех символов в нижний регистр, 
//перевод всех символов в нижний регистр и первых символов слов в верхний регистр. 
//Это должна быть одна функция 

function lowerUpper($str, $rejim) {
    switch ($rejim) {
        case 1:
            return strtoupper($str);
        case 2:
            return strtolower($str);
        case 3:
            strtolower($str);
            return ucwords($str);
        default:
            return " Введите режим от 1 до 3";
    }
}

var_dump (lowerUpper("hello, mam!", 3));


//lcfirst — Преобразует первый символ строки в нижний регистр
//ucfirst — Преобразует первый символ строки в верхний регистр
//ucwords — Преобразует в верхний регистр первый символ каждого слова в строке
//strtolower — Преобразует строку в нижний регистр
//strtoupper — Преобразует строку в верхний регистр


echo "<br><br> Задача 4 <br>"; 
//Используя функцию удаления HTML и PHP-тегов из строки, выведите на экран строку «<h1>Hello, world!</h1>». 
//Строка не должна выглядеть как заголовок первого уровня – все теги должны быть удалены. 

echo strip_tags("<h1>Hello, world!</h1>");


echo "<br><br> Задача 5 <br>";  
//Создайте массив. Объедините все элементы массива в строку и выведите её на экран. 
$arr = ["Hello,", "my", "friends!"];

$str2 = implode (" ", $arr);

echo $str2;


//Задача 6 
//В переменной $date лежит дата в формате '30-11-2017'. Преобразуйте эту дату в формат '2017.11.30'. 



//Задача 7 
//Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши. 


//Задача 8 
//Дана строка 'просто строка.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла //точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim 



//Задача 9** 
//Написать функцию, которая выводит количество дней, оставшихся до нового года. 
//Функция должна корректно работать при запуске в любом году. 



//Задача 10** 
//мы передаём число функции, которая в цикле for пытается поделить его на числа из диапазона 1..num и выводит результат
?>