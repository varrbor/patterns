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

    public function __toString()
    {
        return  'go go go';
    }
}

$person = new Person('John'); // Initially assigned.
echo $person;