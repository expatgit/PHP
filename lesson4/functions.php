<?php

//declare(strict_types=1);

//именованные функции
// анонимные функции
/*
function Имя_функции($arg1, &$arg2, $arg3='default', ...$args){
    // $arg1 передачааргументов в функицю
    ////$&arg2 передача аргументов по ссылке
    /// $arg3 передача аргументов со значением по умолчанию (необяз.) дожны идти после обязательных
    ///  $args переменное кол-во аргументов (должны идти после всех остальных
    ///
    // тело функции
    // return - прерывает работу функции
    // return результат работы функции, можно вернуть только одно значение.
    // для вывода нескрольких результатов - использовать массив
    //
}*/

/*
 * Вызов функции (можно вызывать до объявления и после)
 * имя_функции(данные);
 *
 *
 * */

// функция division два аргумента

function division($a, $b)
{
    if (!is_int($a) && !is_float($b) || !is_int($b) && !is_float($b) && $b === 0) {
        return false;
    }


    return $a / $b;
};


var_dump(division(9, 2.5));

// передача аргументов по ссылке

function change_str(&$some_str) {
    $some_str .= ' после преобразования';
}

$str = 'строка';
change_str($str);
var_dump($str);


function greeting($username='Гость'){
    echo "Добро пожаловать, $username<br>";
}

greeting();
greeting('Владимир');

// если функция принимает на вход обязательные аргументы, то их надо вызвать

function get_sum(...$nums){
    // nums - массив
    return array_sum($nums);
}

var_dump(get_sum(90, 12));
var_dump(get_sum(125, 78, -55, 60));

// указание типа аргументов и типа возвращаемого значения

// начиная с РНР 7.0: array, исяКласса, callable. скалятрый типы
//тип возвращаемого значения:
// РНР 7.0 :тип
// РНР 7.1 ?обнуляемый тип

function sum(int $a, int $b) :float
{
    return $a + $b;
}

var_dump(sum(5.6, 5.6));
//без режима строгой типизации происходит приведение типов - $a - 0, $b - 5.

// режим строгой типизации
//declare(strict_types=1);
// несоответствие типов приведет к ошибке

//вызов функции через переменную

function print_info($info){
    echo $info;
}

$str = 'print_info';
$str('Данные'); //print_info('Данные');

$some_var = 'переменная вне функции';
const OUT_CONST = 'константа вне функции';
function some_function()
{
    // обращение к внешней переменной
    var_dump($some_var); // null
    // обращение к константе
    var_dump(OUT_CONST);
    $some_var = 'локальная переменная';
}

some_function();
var_dump($some_var);

// анонимная функиця, обратиться можно только после объявления
$pos_num = function ($num){
    return $num > 0 ;
};

var_dump($pos_num(-5));

var_dump(is_callable($pos_num));
var_dump(is_callable('some_function'));


function between($min, $max) {
    return function ($value) use ($min, $max){
        return $value >= $min && $value <= $max;
    };
}
$between3_8 = between(3, 8);
var_dump($between3_8(6));
var_dump($between3_8(10));