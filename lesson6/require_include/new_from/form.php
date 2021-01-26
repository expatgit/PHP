<?php ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<?php include_once 'C:\openserver\OpenServer\domains\PHP\lesson6\require_include/new_from/components/header.php' ?>
<form method="post" action="main.php" enctype="multipart/form-data">

    <div>
        <input type="file" name="picture" accept="image/*" id="file_name">


    </div>
    <div>
        <input type="submit" value="отправить" >
    </div>

</form>

</body>
</html>