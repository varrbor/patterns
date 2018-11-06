<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Person
{
    public $sex;
    private $name;
    private $age;

    public function __construct($name="",  $age=25, $sex='Male')
    {
        $this->name = $name;
        $this->age  = $age;
        $this->sex  = $sex;
    }

    /**
     * @param $content
     *
     * @return bool
     */
    public function __unset($content) {
        echo "It is called automatically when we use the unset() method outside the class.<br>";
        echo  isset($this->$content);
    }
}

$person = new Person("John", 25); // Initially assigned.
unset($person->sex);
unset($person->name);
unset($person->age);