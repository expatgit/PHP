<?php ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<form method="post" action="form_handler.php" enctype="multipart/form-data">
    <div>
        <input type="text" placeholder="Ваше_имя" id="user_name" name="user_name">
    </div>
    <div>
        <input type="file" name="picture" accept="image/*" id="file_name">
        <input type="file" name="multi_picture[]" multiple type = 'file' accept="text/csv, image/*" id="file_type">
        <!--<input name="picture[] multiple type="file>-->
    </div>
    <div>
        <input type="submit" value="отправить">
    </div>

</form>

</body>
</html>