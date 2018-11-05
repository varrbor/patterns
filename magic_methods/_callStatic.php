<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Person
{
    function say()
    {
        echo "Hello, world!<br>";
    }

    public static function __callStatic($funName, $arguments)
    {
        echo "The static method you called：" . $funName . "(parameter：" ;  // Print the method's name that is not existed.
        print_r($arguments); // Print the parameter list of the method that is not existed.
        echo ")does not exist！<br>\n";
    }
}
$Person = new Person();
$Person::run("teacher"); // If the method which is not existed is called within the object, then the __callStatic() method will be called automatically.
$Person::eat("John", "apple");
$Person->say();