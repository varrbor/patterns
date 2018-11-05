<!--https://www.tutorialdocs.com/article/16-php-magic-methods.html-->


<!--    error_reporting(E_ALL);-->
<!--    ini_set('display_errors', 1);-->

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Person
{
    function say()
    {
        echo "Hello, world!<br>";
    }

    function __call($funName, $arguments)
    {
        echo "The function you called：" . $funName . "(parameter：" ;  // Print the method's name that is not existed.
        print_r($arguments); // Print the parameter list of the method that is not existed.
        echo ")does not exist!！<br>\n";
    }
}
$Person = new Person();
$Person->run("teacher"); // If the method which is not existed is called within the object, then the __call() method will be called automatically.
$Person->eat("John", "apple");
$Person->say();
