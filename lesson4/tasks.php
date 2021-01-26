<?php

function getAllTasks()
{

    $task1 = [
        'title' => 'Задача 1',
        'date' => date_create('yesterday'),
        'participants' => ['Артур', 'Полина'],
        'closed' => false
    ];

    $task2 = [
        'title' => 'Задача 2',
        'date' => date_create('tomorrow'),
        'participants' => [],
        'closed' => false
    ];

    $task3 = [
        'title' => 'Задача 3',
        'date' => date_create(),
        'participants' => ['Артур', 'Глеб'],
        'closed' => false
    ];

    $task4 = [
        'title' => 'Задача 4',
        'date' => date_create('yesterday'),
        'participants' => ['Павел', 'Полина'],
        'closed' => true
    ];
    return [$task1, $task2, $task3, $task4];

}

//var_dump(getAllTasks());

function find_by_param(array $arr, callable $func){
    $new_arr = [];
    foreach ($arr as $value) {
        if ($func($value)) {
            $new_arr[] = $value;
        }
    }
    return $new_arr;
}
$tasks = getAllTasks();
//новые задачи
$new_task = function ($task){
    return $task['date'] > date_create();
};

// невыполненные задачи: closed - false, дата задачи < date_create()
$old_task = function ($task){
    return !$task['closed'] && $task['date'] < date_create();
};

// TODO::
// закрытые задачи
// задачи, где участник Артур
var_dump(find_by_param($tasks, $new_task));
var_dump(find_by_param($tasks, $old_task));

//Передача функции в качестве параметра другой функции.
$func2 = function(){};

function func1(callable $someFunc){
    $someFunc();
}

func1($func2);
func1('func');

// ЗАМЫКАНИЕ

function s($x) {
    return function ($y){
        return $x + $y;
    }
}
$add5 = s(5);
$res = $add5(10);//15
$res = $add5(20);//20

//ПОСМОТРЕТЬ ПРО ЗАМЫКАНИЕ В JS

//=========================

function s($x) {
    return function ($y) use ($x) {
    };
}