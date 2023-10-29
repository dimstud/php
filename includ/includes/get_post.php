<?php
    // print_r($_GET);
    // print_r($_POST);
    $name = htmlspecialchars($_POST['name'] ?? ""); // если ключ пустой (ЗАПОМНИТЬ)
    echo "Первое значение: {$name}";
?>

<!-- <form method="GET" action="">
    <input type="text" name="name">
    <input type="text" name="name2">
    <input type="text" name="name3">
    <button>Send</button>
</form> -->


<form method="POST" action="">
    <input type="text" name="name">
    <input type="text" name="name2">
    <input type="text" name="name3">
    <button>Send</button>
</form>