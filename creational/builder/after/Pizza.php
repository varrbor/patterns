<?php
class Pizza
{
    private $bacon;
    private $pepperoni;
    private $cheese;
    private $size;



    public function __construct(PizzaBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
        $this->bacon = $builder->bacon;
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