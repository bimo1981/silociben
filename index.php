<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'hello ?'; ?></title>
</head>
<body>

    <?php
    
    echo 'Первый том';
    include'second.php';
    echo 'Тертий том';

    ?>




    <?php
    if(mt_rand(0,1)){
        ?>
        <div style="color: blue;">Синий текст</div>
        <?php 
    } else {
        ?>
        <div style="color: red;">Красный текст</div>
        <?php
    }
    ?>
</body>
</html>