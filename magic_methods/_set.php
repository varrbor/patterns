<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Person
{
    private $name;
    private $age;

    public function __construct($name="",  $age=25)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function __set($property, $value) {
        if ($property=="age")
        {
            if ($value > 150 || $value < 0) {
                return;
            }
        }
        $this->$property = $value;
    }

    public function say(){
        echo "My name is ".$this->name.",I'm ".$this->age." years old";
    }
}

$Person=new Person("John", 25); //Note that the initial value will be changed by the code below.
$Person->name = "Lili";     //The "name" property is assigned successfully. If there is no __set() method, then the program will throw an exception.
$Person->age = 16; //The "age" property is assigned successfully.
$Person->age = 160; //160 is an invalid value, so it fails to be assigned.
$Person->say();  //print：My name is Lili, I'm 16 years old.