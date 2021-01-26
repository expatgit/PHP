<?php
//подключеие php файлов в текущий файл:

// если указанный файл не найден, скрипт приведет к ошибке.
// выполнение текущего скрипта прекратится
// 1. require_once "имя файла"
// 2. require "имя файла"

// если указанный файл не найден, то текущий скрипт продолжит выполнение.
// 3. include_once "имя файла"
// 4. include "имя файла"

require_once "data.php";

$books = getBooks();

// подключение файла произойдет только один раз
// require/include _once 'имя файла';

// require/include _once 'file.php';
// require/include _once 'file.php';

// 1 -> 2 -> 3 -> 4(1,2,3) <- 1

//// require/include  'file.php';
//// require/include  'file.php';
//// 1 -> 2 -> 3 -> 4(1,2,3,1) <- 1

?>


<!doctype html>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>

<body>

    <?php include_once 'C:\openserver\OpenServer\domains\PHP\lesson6\require_include/components/header.php' ?>

    <?php foreach ($books as $book): ?>

    <div>
        <h3>Книга <?php echo $book['title'] ?> </h3>
        <h6>Автор: <?php echo $book['author'] ?></h6>
        <img width="400" height="200" src="<?php echo $book['img'] ?>">
        <p>Стоимость <?php echo $book['price'] ?> </p>
        <a href="">Подробнее</a>
    </div>
    <?php endforeach; ?>

    <?php include_once 'C:\openserver\OpenServer\domains\PHP\lesson6\require_include/components/footer.php' ?>

</body>

</html>
