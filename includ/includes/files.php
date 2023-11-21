<?php
    // print_r($_FILES);

    if (!empty($_FILES)) {
        move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$_FILES['file']['name']);
    }

    // if (is_file('uploads/dc1.png')) {
    //     echo "dc есть!";
    // }
    // if (is_dir('uploads')) {
    //     echo "uploads есть!";
    // }

    // rmdir('test');
    // rename('uploads/dc.png', 'uploads/dc1.png');

    // $text = file_get_contents('https://povar-ru.turbopages.org/povar.ru/s/recipes/pshennaya_kasha_v_multivarke-11285.html');
    // echo htmlspecialchars($text);

    // $text = file('https://povar-ru.turbopages.org/povar.ru/s/recipes/pshennaya_kasha_v_multivarke-11285.html');
    
    // foreach($text as $num => $line){
    //     echo $num . ": " . htmlspecialchars($line) . "<br>" . "<br>";
    // }

    // $file = 'uploads/text.txt';
    // $var = "Hello\n";

    // $b = file_put_contents($file, $var, FILE_APPEND | LOCK_EX);

    // echo $b;



    // $file = 'uploads/text.txt';
    // echo filesize($file);




    $file = 'uploads/text.txt';

    $handle = fopen($file, 'a+');

    $text = fread($handle, filesize($file));

    fwrite($handle, 'HHHHaaahhah');

    fclose($handle);

    echo $text;

?>

<form method="POST" action="" enctype="multipart/form-data">
    <p><input type="text" name="title"></p>
    <p><input type="file" name="file"></p>
    <button>Submit</button>
</form>