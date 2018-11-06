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

    public function __invoke() {
        echo 'This is an object';
    }

}

$person = new Person('John'); // Initially assigned.
$person();