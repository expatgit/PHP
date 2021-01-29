<?php

//main.php
//form.php
//accoutn.php
//logout.php


session_start();
$login = $_SESSION['login'];


if($server['REQUEST_METHOD'] === 'POST') {
    $post = $_POST; // login === qwerty | password === 123
    if (trim($post['login']) === 'qwerty' && trim($post['password']) === '123') {
        $_SESSION['login'] = $post['login'];
        header('location: account.php');
    } else {
        $error = 'Ошибка авторизации';
    }


}

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
    <?php if (isset($login)): {
            echo $post['text'];
        }?> <?php endif; ?>

<div id="section">
    <?php if (isset($login)): ?>
    <label for="comment">Введите комментарий</label>
        <form id="comment">
        <textarea name="text">

        </textarea>
        <input type="submit" value="Добавить">

    </form>
    <?php endif; ?>
</div>
<br><br>
<button><a href="../../" >В меню</a></button>


<script src="js/ajax.js"></script>

</body>
</html>