<?php

//main.php
//form.php
//accoutn.php
//logout.php


session_start();
$login = $_SESSION['login'];

$server = $_SERVER;

if ($server['REQUEST_METHOD'] === 'POST') {
$post = $_POST;
echo $post['text'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Страница</title>
</head>
<body>

<nav>
    <?php if (isset($login)): ?>
    <a href="logout.php"> Выйти</a>
    <?php else: ?>
    <a href="form.php">Войти</a>
    <?php endif; ?>

</nav>


<h2>Контент доступен всем пользователям</h2>


<!-- form: textarea input -->

<div>
    <?php if (isset($login)): ?>



    <form>
        <textarea name="text">

        </textarea>
        <input type="submit" value="Добавить">
    </form>
    <?php endif; ?>
</div>




</body>
</html>