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
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тортики</title>
    <link rel="stylesheet" href="/lesson5/css/cakes.css">
</head>
<body>
    <main>
    <?php foreach ($cakes as $cake): ?>
        <!-- карточка одного тортика -->
        <div class="cake">
            <h2><?php echo $cake['name'] ?></h2>
            <div>
                <img src="/lesson5/img/<?php echo $cake['main_img']?>">
            </div>
            <p>Стоимость: <?php echo $cake['price'] ?> руб.</p>
            <a href="cake.php?id=<?php echo $cake['id'] ?> ">Подробнее</a>
        </div>
<?php endforeach; ?>
    </main>
</body>
</html>