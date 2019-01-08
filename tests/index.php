<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

interface Animal
{
    public function eat(string $food) : bool;
    public function talk(bool $shout) : string;
}

class Cat implements Animal
{
    public function eat(string $food): bool
    {
        if ($food === "tuna") {
            return true;
        } else {
            return false;
        }
    }
    public function talk(bool $shout): string
    {if ($shout === true) {
        return "MEOW!";
    } else {
        return "Meow.";
    }
    }
}

class Dog implements Animal
{
    public function eat(string $food): bool
    {
        if (($food === "dog food") || ($food === "meat")) {
            return true;
        } else {
            return false;
        }
    }
    public function talk(bool $shout): string
    {
        if ($shout === true) {
            return "WOOF!";
        } else {
            return "Woof woof.";
        }
    }
}


$pets = array(
    'felix' => new Cat(),
    'oscar' => new Dog(),
    'snowflake' => new Cat()
);

foreach ($pets as $pet) {
    echo $pet->talk(false);
}