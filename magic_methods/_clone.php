<?php
class Person
{
    public $sex;
    public $name;
    public $age;

    public function __construct($name="",  $age=25, $sex='Male')
    {
        $this->name = $name;
        $this->age  = $age;
        $this->sex  = $sex;
    }

    public function __clone()
    {
        echo __METHOD__."your are cloning the object.<br>";
    }

}

$person = new Person('John'); // Initially assigned.
$person2 = clone $person;

var_dump('persion1:');
var_dump($person);
echo '<br>';
var_dump('persion2:');
var_dump($person2);




//class iPhone {
//
//    public $name;
//    public $email;
//
//    public function __construct($n, $e) {
//
//        $this->name = $n;
//        $this->email = $e;
//
//    }
//}
//
//
//$main = new iPhone('Dark', 'm@m.com');
//$copy = clone $main;
//
//
//// if you want to print both objects, just write this
//
//echo "<pre>"; print_r($main);  echo "</pre>";
//echo "<pre>"; print_r($copy);  echo "</pre>";