<?php

$post = $_POST;
//var_dump($post);

// данные о загружаемых файлах хранится в $_FILES

$files = $_FILES;

//var_dump($files);

//если загрузга несколких файлов - файлы в массив

//var_dump($files['picture']);

$file_name = $files['picture']['name']; //имя файла
//var_dump($file_name);

//расширение файла

$ext = pathinfo($file_name, PATHINFO_EXTENSION);
//var_dump($ext);

//$new_file_name = $file_name . дата+время;
$new_file_name = md5($new_file_name . microtime());

//$file_name = $file_name . ".$ext";
//$file_name .= "$ext";


$file_type = $files['picture']['type']; // тип файла


$tmp_name = $files['picture']['tmp_name'];



if (move_uploaded_file($tmp_name, "img/$file_name")){

}

$list = "list.txt";

file_put_contents($list, $file_name . PHP_EOL, FILE_APPEND | LOCK_EX);
$img_names = file($list, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);

var_dump($files);
var_dump($img_names);

?>
--

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<?php include_once 'C:\openserver\OpenServer\domains\PHP\lesson6\require_include/new_from/components/header.php' ?>

<section>
    <?php foreach ($img_names as $name): ?>
<div>

    <p > Название файла: <?php echo "$tmp_name"?></p>
    <img height="200" width="200" src="img/<?php echo $name?>">
    <?php endforeach; ?>
</div>
</section>

</form>

</body>
-