<?php
/**
 * Какой-то продукт
 */
interface Product
{
}

/**
 * Какая-то фабрика
 */
class Factory
{

    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getProduct()
    {
        return clone $this->product;
    }
}

class SomeProduct implements Product
{
    public $name;
}


$prototypeFactory = new Factory(new SomeProduct());

$firstProduct = $prototypeFactory->getProduct();
$firstProduct->name = 'The first product';

$secondProduct = $prototypeFactory->getProduct();
$secondProduct->name = 'Second product';

print_r($firstProduct->name);
// The first product
print_r($secondProduct->name);
// Second product