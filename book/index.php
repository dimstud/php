<?php
$arr=array(
    'Alex'=>1,
    'Dima'=>3,
    'Kris'=>4,
    'bell'=>array(
        'are'=>34,
        'sex'=>'women'
    )
    );
var_dump($arr);
sort($arr, SORT_NUMERIC);
var_dump($arr);
?>