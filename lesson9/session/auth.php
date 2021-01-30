<?php

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
</head>
<body>

    <form action="auth.php" method="post">
        <div>
            <input type="text" name="login" placeholder="Логин">
        </div>
        <div>
            <input type="password" name="password" placeholder="Пароль">
        </div>
        <input type="submit" value="Войти">
    </form>
</body>
</html>
