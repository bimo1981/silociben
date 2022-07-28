<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'hello ?'; ?></title>
</head>
<body>


    <?php 
    // Variables
    $n1 = $n2 = $n3 = 5;
    echo $n2;
    echo `ls`;

    ?>
    
    <?php
    // include the file 
    echo 'Первый том';
    require'second.php';
    echo 'Тертий том';

    ?>




    <?php
    // Example the condition
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