<?php

$cakes = [
    [
        'id' => 1,
        'name' => 'Эклер',
        'description' => 'Пирожное в виде трубочки из заварного теста, покрытой помадкой, с начинкой из сливочно-масляного или заварного крема.',
        'main_img' => 'eclair_main.jpg',
        'imgs' => ['eclair_first.jpg', 'eclair_second.jpg', 'eclair_third.jpg'],
        'price' => 60
    ],
    [
        'id' => 2,
        'name' => 'Чизкейк',
        'description' => 'Блюдо европейской и американской кухни, представляющее собой сыросодержащий десерт от творожной запеканки до суфле.',
        'main_img' => 'cheesecake_main.jpg',
        'imgs' => ['cheesecake_first.jpg', 'cheesecake_second.jpg', 'cheesecake_third.jpg'],
        'price' => 120
    ],
    [
        'id' => 3,
        'name' => 'Тирамису',
        'description' => 'Итальянский многослойный десерт, в состав которого входят: сыр маскарпоне, кофе (обычно эспрессо), куриные яйца, сахар и печенье савоярди. Как правило, десерт припудривают какао-порошком.',
        'main_img' => 'tiramisu_main.jpg',
        'imgs' => ['tiramisu_first.jpg', 'tiramisu_second.jpg', 'tiramisu_third.jpg'],
        'price' => 350
    ],
    [
        'id' => 4,
        'name' => 'Красный бархат',
        'description' => 'Шоколадный торт тёмно-красного, ярко-красного или красно-коричневого цвета. Традиционно готовится как слоёный пирог с глазурью из сливочного сыра.',
        'main_img' => 'red_main.jpg',
        'imgs' => ['red_first.jpg', 'red_second.jpg', 'red_third.jpg'],
        'price' => 800
    ]
];

$get = $_GET;
$id = $get['id'];

$cake = $cakes[$id-1]; //6546
//Если

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $cake['name'] ?></title>
    <link rel="stylesheet" href="/lesson5/css/cake.css">

</head>
<body>

<section class="cake">

    <div class="info">
        <h2><?php echo $cake['name'] ?></h2>
        <p><?php echo $cake['description'] ?></p>
        <p>Стоимость: <?php echo $cake['price'] ?> руб.</p>
    </div>
    <div class="img">
        <img src="/lesson5/img/<?php echo $cake['main_img'] ?>">
    </div>
    <div class="images">
       <?php foreach ($cake['imgs'] as $img): ?>
       <img src="/lesson5/img/<?php echo $img?>">
        <?php endforeach; ?>
    </div>
    <div class="buy">
        <a href="#">Заказать</a>
    </div>
</section>

</body>
</html>

