<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Pizza
{
    private $size;
    private $cheese;
    private $pepperoni;
    private $bacon;

    public function __construct($size, $cheese, $pepperoni, $bacon)
    {
        $this->size = $size;
        $this->cheese = $cheese;
        $this->pepperoni = $pepperoni;
        $this->bacon = $bacon;
    }
    public function show()
    {
        $recipe = $this->size . " inch pizza with the following toppings: ";
        $recipe .= $this->cheese ? "cheese, " : "";
        $recipe .= $this->pepperoni ? "pepperoni, " : "";
        $recipe .= $this->bacon ? "bacon, " : "";
        return $recipe;
    }
}

$pizzaRecipe = (new Pizza(9,'tttt','uuuu','eeee'));

//$order = new Pizza($pizzaRecipe);
echo '<pre>';
print_r($pizzaRecipe->show());
echo '</pre>';
die();
