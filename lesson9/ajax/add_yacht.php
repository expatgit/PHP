<?php
$companies = [
    [
        'id' => 1,
        'name' => 'Custom Line'
    ],
    [
        'id' => 2,
        'name' => 'Mangusta'
    ],
    [
        'id' => 3,
        'name' => 'Ferretti'
    ],
    [
        'id' => 4,
        'name' => 'Riva'
    ],
    [
        'id' => 5,
        'name' => 'Austin Parker'
    ],
];

?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавление яхты</title>
    <link rel="stylesheet" href="/lesson5/css/form.css">
</head>
<body>
    <form>
        <p id="answer"></p>
        <fieldset>
            <legend>Основная информация</legend>
            <div>
                <label for="companies">Выбор производителя:</label>
                <select id="companies" name="company">
                    <?php foreach ($companies as $company): ?>
                    <option value="<?php echo $company['id']?>">
                        <?php echo $company['name']?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div>
                <label>
                    Стоимость (евро): <input type="number" name="price">
                </label>
            </div>
            <div>
                <label>
                    Количество палуб: <input type="number" name="count">
                </label>
            </div>
        </fieldset>

        <fieldset>
            <legend>Загрузка изображения</legend>
            <div>
                <input type="file" accept="image/*" name="yacht-img">
            </div>
        </fieldset>

        <fieldset>
            <legend>Дополнительная информация</legend>
            <div>
                <div><label for="add-info">Комментарий в свободной форме</label></div>
                <textarea name="add-info" id="add-info"></textarea>
            </div>
        </fieldset>

        <input type="submit" value="Добавить">
    </form>

<script src="js/add_yacht.js"></script>
</body>
</html>