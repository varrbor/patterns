<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Person
{
    private $name;
    private $age;

    function __construct($name="", $age=1)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($propertyName)
    {
        if ($propertyName == "age") {
            if ($this->age > 30) {
                return $this->age - 10;
            } else {
                return $this->$propertyName;
            }
        } else {
            return $this->$propertyName;
        }
    }
}
$Person = new Person("John", 60);   // Instantiate the object with the Person class and assign initial values to the properties with the constructor.
echo "Name：" . $Person->name . "<br>";   // When the private property is accessed, the __get() method will be called automatically,so we can get the property value indirectly.
echo "Age：" . $Person->age . "<br>";    // The __get() method is called automatically，and it returns different values according to the object itself.