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
    $mes = "Hello world!";

    $res = strtoupper($mes);
    echo $res;
    $res = strtolower($res);
    echo $res;
?>