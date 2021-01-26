<?php

$post = $_POST;
var_dump($post);

// данные о загружаемых файлах хранится в $_FILES

$files = $_FILES;

var_dump($files);

//если загрузга несколких файлов - файлы в массив

var_dump($files['picture']);

$file_name = $files['picture']['name']; //имя файла
var_dump($file_name);

//расширение файла

$ext = pathinfo($file_name, PATHINFO_EXTENSION);
var_dump($ext);

//$new_file_name = $file_name . дата+время;
$new_file_name = md5($new_file_name . microtime());

//$file_name = $file_name . ".$ext";
$file_name .= "$ext";


$file_type = $files['picture']['type']; // тип файла
var_dump($file_type);

$tmp_name = $files['picture']['tmp_name'];
var_dump($tmp_name);

var_dump($files['multi_picture']);
$file_name_1 = $files['multi_picture']['name'][0];
$file_name_2 = $files['multi_picture']['name'][1];



// пути:
// директория/файл - от корня проекта
// директория/файл - относительно текущей директории
// ../директория/файл - переход на один уровень выше относительно текущей директории

// перемещение из временной директории
//перед тем, как переместить файл из временной директории в постоянную, проверяем тип и т.д.
// возвращает либо тру либо фолз (загружен/не загружен)


if (move_uploaded_file($tmp_name, "/img/$file_name")){
    echo 'Файл успешно загружен';
} else {
    echo 'Файл загрузить не удалось';
}

// форма -> временная директория, а инфо о файле - в массив $_FILES;
