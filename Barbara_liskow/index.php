//https://dou.ua/lenta/articles/liskov-substitution-principle/
<?php

error_reporting(1);
ini_set('display_errors','On');

abstract class Boiler {

    private $desirableTemperature;

    public function setDesirableTemperature($temp) {
        $this->desirableTemperature = $temp;
    }

    public function getDesirableTemperature() {
        return $this->desirableTemperature;
    }

    abstract function initializeDevice();
    abstract function getWaterTemperature();
    abstract function heatWater();
}

class BrandABoiler extends Boiler {
    function initializeDevice() { /*use API BrandA*/ }
    function getWaterTemperature() { /*use API BrandA*/ }
    function heatWater() { /*use API BrandA*/ }
}

$myBoiler = new BrandABoiler();
$myBoiler->setDesirableTemperature(37);
$myBoiler->initializeDevice();
echo '<pre>';
print_r($myBoiler->getWaterTemperature());
echo '</pre>';
die();

while($myBoiler->getWaterTemperature() < $myBoiler->getDesirableTemperature()) {
    $myBoiler->heatWater();
}