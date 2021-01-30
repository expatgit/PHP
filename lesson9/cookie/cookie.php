<?php
// cookie небольшие наборы данных, с помощью которых можно хранить инфо на стороне клиента (в браузере).

//важную информацию хранить нельзя.
// срок жизни куки можно задать
/*
// установить cookie: setcookie()
обязательные параметры:
name - имя куки
value - значение куки

необязательные параметры:
expire - время жизни куки (сколько name и value будут храниться на клиенте)
path - путь к каталогу на сервере, для которого будут доступны cookie
domain - домен, для которого доступны куки
secure (true / false) - куки может передаваться только по https
httponly(true / false) - доступна для js или нет
начиная с php 7.3 samesite ('None', 'Lax', 'Strict') - TODO




*/
// получить данные cookie, которые прислал клиент $_COOKIE




$color = 'blue';

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница</title>
</head>


<body style="background: <?php echo $color ?>">

<form action="cookie.php" method="post">
    <label for="change">Изменить цвет фона</label>
    <select id="change" name="color">
        <option value="red">Красный</option>
        <option value="yellow">Желтый</option>
        <option value="blue">Синий</option>
    </select>
    <input type="submit" value="Изменить цвет">
</form>

</body>

</html>
