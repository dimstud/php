<?php 
    // trim - удаляет символы в строке которые укажем (ltrim, rtrim)

    // $mes = '    Hello world!    ';
    // var_dump($mes);

    // $res = trim($mes);
    // var_dump($res);

    // $res = rtrim($res, "!");
    // var_dump($res);



    // strip-tags - удаляет теги в строке

    // $mes = "<h1>Hello world!</h1>";
    // echo $mes;
    // $res = strip_tags($mes);
    // echo $res;

    // $mes = "<h1>Hello <i>world!</i></h1>";
    // $res = strip_tags($mes,['h1', 'i']);
    // echo $res;



    // htmlspecialchars - заменяет знаки <> на их аналоги (скрипт не сработает)

    // $mes = "<h1>Hello world!</h1><script>alert('test')</script>";
    // // $res = htmlspecialchars($mes);
    // $res = htmlentities($mes, ENT_QUOTES);
    // echo $res;




    // str_replace - заменяет все на все, что укажем
    // $mes = "Hello [b]world![/b]";
    // $res = str_replace('[b]', '<b>', $mes);
    // $res = str_replace('[/b]', '</b>', $res);
    // echo $res;

    // или

    // $mes = "[i]Hello[/i] [b]world![/b]";
    // $bb_code = ['[b]', '[/b]', '[i]', '[/i]'];
    // $htlm_code = ['<b>', '<b>', '<i>', '</i>'];
    // $res = str_replace($bb_code, $htlm_code, $mes);
    // echo $res;

    // strtoupper strtolower - преобразует в верхний или в нижний регистр
    // $mes = "Hello world!";

    // $res = strtoupper($mes);
    // echo $res;
    // $res = strtolower($res);
    // echo $res;



    // mb_strlen - возвращает длину строки

    // $mes = "Hello world!";
    // $mes_ru = "Привет мир!";

    // $res = mb_strlen($mes, 'utf-8');
    // $res_ru = mb_strlen($mes_ru);
    // echo "{$res} <br> {$res_ru}";



    // mb_strpos - указывает на какокой позиции находится символъ

    // $mes = "Hello world!";

    // $res = mb_strpos($mes, 'H');
    // if ($res !== false) {
    //     echo "Данная буква находиться на позиции: {$res}";
    // } else {
    //     echo "Данная буква отсутствует.";
    // }




    // mb_substr - возвращает слово до конца, либо количество символлов с указаной позиции и количество символов
    // $mes = "Hello world!";

    // $res = mb_substr($mes, 2, 5);
    // var_dump($res);






    // Date

    // date('Y-m-d H:i:s') - вывовит время на сервере
    // echo date('Y-m-d H:i:s') . "<br>";
    // echo time() . "<br>";
    // echo date("Y-m-d H:i:s", time()) . "<br>";
    // echo date("Y-m-d H:i:s", time() - 60*60*24*5) . "<br>"; // -5 дней
    // echo date_default_timezone_get() . '<br>';
    // date_default_timezone_set('Europe/Moscow') . '<br>';
    // echo date("Y-m-d H:i:s", time()) . "<br>";

    echo microtime() . "<br>";
    echo microtime(true);
?>