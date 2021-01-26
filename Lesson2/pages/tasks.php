<?php
$tasks = [
    [
        'title' => 'Задача 1',
        'date' => 'yesterday',
        'participants' => ['Артур', 'Полина'],
        'closed' => false
    ],
    [
        'title' => 'Задача 2',
        'date' => 'tomorrow',
        'participants' => [],
        'closed' => false
    ],
    [
        'title' => 'Задача 3',
        'date' => 'today',
        'participants' => ['Артур', 'Глеб'],
        'closed' => false
    ],
    [
        'title' => 'Задача 4',
        'date' => 'yesterday',
        'participants' => ['Павел', 'Полина'],
        'closed' => true
    ]
];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задачи</title>
</head>
<body>

<?php foreach ($tasks as $task): ?>
    <article>
        <h3><?php echo $task['title']?></h3>
        <p>Выполнить к <?php echo $task['date']?></p>
        <p>Статус: <?php echo $task['closed'] ? 'Закрыта' : 'Открыта'?></p>

        <?php if ($task['participants']): ?>
        <div>
            <h4>Участники:</h4>
            <ul>
                <?php foreach ($task['participants'] as $participant): ?>
                    <li><?php echo $participant; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
    </article>
<?php endforeach; ?>
</body>
</html>
