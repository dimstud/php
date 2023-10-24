<?php require_once 'includes/math.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шаблонизация</title>
</head>
<body>
    <?php 
        // include 'templates/header.php'; // warning
        // require 'templates/header.php'; // fatal erorr

        // include_once 'templates/header.php';
        // require_once 'templates/header.php';


        require_once 'templates/header.php';


        $x = 2;
        $y = 4;

        $res = sum($x,$y);

        echo $res . "<br>";

        $resMin = minus($x,$y);

        echo $resMin . "<br>";



        require_once 'templates/footer.php';
    ?>
</body>
</html>