<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Person{
    private $ssn;
    private $firstName;
    private $lastName;

    public function __construct($ssn,$firstName,$lastName){
        $this->ssn = $ssn;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __destruct(){
        echo sprintf("Person with SSN# %s is terminated.<br>",
            $this->ssn);
    }

    public function __toString(){
        return sprintf("SSN: %s, Name: %s, %s<br>",
            $this->ssn,
            $this->lastName,
            $this->firstName);
    }

    public function __clone(){
        echo 'Copying object <br>';
    }
}

function shallow_copy(){

    $p1 = new Person('1234567888', 'Doe', 'John');
    echo $p1;

    $p2 = new Person('1234567889','Grace','Dell');
    echo $p2;

    $p2 = $p1;
}

function deep_copy(){
    $p1 = new Person('1234567888', 'Doe', 'John');
    echo $p1;

    $p2 = clone $p1;
    echo $p2;
}

echo '<pre>';
print_r(shallow_copy());
echo '</pre>';


echo '<pre>';
print_r(deep_copy());
echo '</pre>';
die();

