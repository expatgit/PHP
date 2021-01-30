<?php

session_start();
// session_start(['read_and_close' => close]);

var_dump('Получили ' . $_SESSION['some_var']);

//проверка наличия переменной в сессии

var_dump(isset($_SESSION['some_var']));

//закрытие сессии

unset($_SESSION['some_var']); //удаление одной переменной
$_SESSION = []; //перезапись массива без удаления массива
session_destroy(); // закрытие сессии, удаление массива


?>



<nav>
    <a href="first.php">РАЗ</a>
    <a href="second.php">ДВА</a>
</nav>

