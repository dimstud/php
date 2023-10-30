<?php
    // print_r($_GET);
    // print_r($_POST);
    $name = htmlspecialchars($_POST['name'] ?? ""); // если ключ пустой (ЗАПОМНИТЬ)
    echo "Введенное имя: {$name} <br>";
    
    $id = (int)(strip_tags($_POST['id'] ?? "")); // (int) приводит к числовой значению
    echo "Введенный id: {$id} <br>";
    
    $yes = $_POST['yes'] ?? "";
    if($yes == "on") echo "Введенный checkbox : cheked <br>"; // проверка checkbox
    
    $num = $_POST['num'] ?? "";
    var_dump($num); // name="num[]" в html передаст массив
?>