<?php
/*$obj = new User;
print_r($obj); echo "<br>";
$obj -> name = "Dima";
$obj -> password = "mypass"; echo "<br>";
$obj -> same(); echo "<br>";
print_r($obj); echo "<br>";

$obj2 = clone $obj;
$obj2->name = "Kris";
$obj2->password = "orpass";

echo "obj name = " . $obj->name . "<br>";
echo "obj pass = " . $obj->password . "<br>";

echo "obj2 name = " . $obj2->name . "<br>";
echo "obj2 pass = " . $obj2->password . "<br>";

class User {
  public $name, $password;
  function same() {
    echo "Сюда код";
  }
}*/


/*
$obj = new User;
$obj->pass = "1234";

echo $obj->some();

class User {
  public $name, $pass;
  function some(){
    return $this->pass;
  }
}
*/


/*
#Константы
Transtator::lookup();
class Transtator {
  const EN = 1;
  const ES =2;
  const RU = 4;
  
  Static function lookup() {
    echo self::ES;
  }
}
*/



#Область видимости свойств и методов
#public (открытые).
#protected (защищенные). На эти элементы можно ссылаться только через  принадлежащие объектам методы класса и такие же методы любых подклассов.
#private (закрытые). К представителям класса с этой областью видимости  можно обращаться через методы этого же класса, но не через методы его  подклассов.

/*
$a = 1;
$b = 2;

if($a<$b){ ?>
  <h1><?php echo $a ?></h1> <?php
}
*/


// $a = 2;
// $b = 2;

/*
switch ($a) {
  case 1:
    ?> <h1>Равно 1</h1> <?php
    break;

    case $a >= 5:
      ?> <b>Больше или равно 5</b> <?php
      break;
  
  default:
    ?> <i>Не чему не равно</i> <?php
    break;
}
*/

/*
$res = match ($b) {
  1 => "В переменной ё",
  2 => "В переменной 2",
  default => "Ничего не подошло",
};
echo $res;
*/

// $a = 3;
// $b = 1;

// $res = match (true) {
//   $b >= 2 => "В переменной 2",
//   $b <= 3 => "В переменной 1",
//   default => "Ничего не подошло",
// };
// echo $res;



// $a = 2;
// $b = 2;

// $res = match (2) {
//   $b, $a => "В переменной 2",
//   default => "Ничего не подошло",
// };
// echo $res;



// &$a присвоение по ссылке
// = присвоение
// $a + $b;
// $a - $b;
// $a * $b;
// $a / $b;
// $a % $b; деление по модолю
// $a ** $b; возведение в степень
// -$a; отрицание
// +$a; идентичность stiring -> intdiv
// += -= /= %= **= сокращенное написание
// $a++; ++a$; инкримент
// $a--; --a$; дикримент


// for ($i=1; $i <= 10; $i++) { 
//   echo 'helo<br>';
// }

// или

// $i=0;
// for (; ;) { 
//   echo 'helo<br>';

//   $i++;

//   if ($i === 10) break;
// }
error_reporting (-1);

// $args=['1', '2', '3', '4'];

// for($i=0; $i<count($args); $i++){
//     echo $args[$i] . '<br>';
// }



// Циклы

// $i = 1;

// while ($i <= 10) {
//     echo $i . '<br>';
//     $i++;
// }

// echo "<br> <br>";

// $j = 10;

// while($j >= 1) {
//   echo "{$j} <br>";
//   $j--;
// }


// $c = 4;
// $r = 3;

// $i = 1;
// echo "<table border=\"1\">";
//     while($i <= $r){
//         echo "<tr>";
//             $j = 1;
//             while($j <= $c){
//                 echo "<td> Строка: {$i}. Столбец: {$j} </td>";
//                 $j++;
//             }
//         echo "</tr>";
//         $i++;
//     }
// echo "</table>";

// $year = 1922;
// $yearEnd = 2022;

// echo "<select>";
//     while($year <= $yearEnd){
//         echo "<option value = {$year}>{$year}</option>";
//         $year++;
//     }
// echo "</select>";

// $i = 11;

// do {
//     echo "{$i} <br>";
//     $i++;
// } while ($i <= 10);

// $names = ['Alex', 'Cris', 'Tim', 'Tom'];

// foreach($names as $name){
//     echo "{$name} <br>";
// }

/*
$container = [
    'Alex' => 21,
    'Cris' => 22,
    'Tim' => 20,
    'Tom' => 32,
];

foreach($container as $key => $item){
    echo "{$key}: {$item} лет <br>";
}
?>
*/

$arr = ['sa', 'er', 'we'];
foreach ($arr as $i => $w) {
    echo $i.': '.$w.'<br>';
}