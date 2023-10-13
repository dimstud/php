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


$a = 1;
$b = 2;

if($a<$b){ ?>
  <h1><?php echo $a ?></h1> <?php
}
?>