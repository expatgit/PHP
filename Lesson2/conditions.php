<?php

round(10.9, 0, PHP_ROUND_HALF_DOWN); // 11
round(10.9, 0, PHP_ROUND_HALF_UP); // 11

round(10.3, 0, PHP_ROUND_HALF_DOWN); // 10
round(10.3, 0, PHP_ROUND_HALF_UP); // 10

round(10.5, 0, PHP_ROUND_HALF_DOWN); // 10
round(10.5, 0, PHP_ROUND_HALF_UP); // 11

floor(10.3); // 10
floor(10.9); // 10
floor(10.5); // 10

// Логические операторы

// и && || and
// или
// не
// исключающее или - xor

$a = 55;
$b = 45;
var_dump($a === '45' || $b < 50); //true
var_dump($a == '45' && $b === 55); // false

// xor возвращеает тру если один из операндов тру, но не оба.

$bool = false || true;
var_dump($bool);


$bool = false or true;
var_dump($bool);


// тернарный оператор
// результат = условие ? значение 1 : значение 2
// тру - условие 1, фалс - условие 2

$a = 23;
$b = 100;
$c = 12;
//

$result = ($a < $c && $c < $b) ? 'YES' : 'NO';
var_dump($result);


$login = isset($login) ? $login : 'guest';
var_dump($login);

$month = 2;
if ($month < 3 || $month === 12) { echo 'Зима'; }
else if ($month < 6) { echo 'Весна'; }
else if ($month < 9) { echo 'Лето'; }
else if ($month < 12) { echo 'Осень'; }
else { echo 'Неверный месяц'; };

$auth = true;
$login = 'qwerty';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php if($auth): ?>
    <h2> Добро пожаловать, <?php echo $login ?></h2>
    <a href="#">Выйти</a>
    <?php else: ?>
        <h2> Вы вошли как гость</h2>
        <a href = "#">Войти в ЛК</a>
    <?php endif; ?>

</body>
</html>


