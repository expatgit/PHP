<?php

$filename = 'file.txt';

// запись в файл (в одну строку)

// file_put_contents(имя файла, данные для записи, флаги);
// принимаемые аргументы:
// имя файла - запись осущесвляется в указанный файл, если файла не существует, он будет созданэ.
// флаги:
// FILE_APPEND - ДОзапись файла
// LOCK_EX - блокировка на время записи.
// возвращаемые значения:
// 1. количесто записанных байт
// 2. false в случае ошибки записи

if (file_put_contents($filename, 'данные', FILE_APPEND | LOCK_EX) !== false) {
    echo 'данные записаны успешно';
}

// запись в файл с новой строки

$filename_2 = 'file2.txt';

if (file_put_contents($filename_2, 'данные' . PHP_EOL/*PHP_EOL - конец строки, либо ставим \n      */, FILE_APPEND | LOCK_EX) !== false) {
    echo 'данные записаны успешно';
}

// чтение из файла в строку
// возвращает прочитанную строку или false в случае ошибки.

$data = file_get_contents($filename_2);
var_dump($data);

$data_arr = file($filename_2, 4 | 2);
var_dump($data_arr);

// копирование из одного файла в другой

if (copy($filename, 'new.txt')) {
    echo 'Копирование успешно завершено <br>';
}

// удаление файла (не директории)
if (unlink('new.txt')){
    echo 'удаление завершено <b>';
}

//Создание директории
mkdir('new_dir');

// удаление директории
rmdir('new_dir');


function read_dir($dirname) {
    // проверка на директорию
    if (is_dir($dirname)) {
        // открытие директории
        if ($dh = opendir($dirname)) {
            while (($data = readdir($dh)) !==false) {
                echo $data;
            }
            closedir($dh);
        }
    }
}

read_dir('/lesson1');

// file_put_contents
function write_file($filename, $data) {
    $fp => fopen($filename, 'a'); // stream
    fwrite($fp, $data);
    fclose($fp);



}


// file_get_contents()

?>