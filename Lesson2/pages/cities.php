<?php
$cities = [
    [
        'id' => 1,
        'title' => 'Париж',
        'price' => 1234,
        'img' => 'paris.jpg'
    ],
    [
        'id' => 2,
        'title' => 'Нью-Йорк',
        'price' => 4526,
        'img' => 'new-york.jpg'
    ],
    [
        'id' => 3,
        'title' => 'Лондон',
        'price' => 2345,
        'img' => 'london.jpg',
    ],
];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Путешествия</title>
</head>
<body>
<!-- article -->
<!--    h2 название -->
<!--    p Стоимость:  -->
<!--    img изображение:  -->
<!-- article -->
<section>
    <?php foreach ($cities as $city): ?>
    <article>
        <h2>Название: <?php echo $city['title'] ?></h2>
        <p>Стоимость: <?php echo $city['price'] ?></p>
        <img src="../img/cities/<?php echo $city['img']?>"
             height="200" width="800">
        <a href="city.php?id=<?php echo $city['id']?>">Подробнее</a>
    </article>
    <?php endforeach; ?>
</section>

</body>
</html>
