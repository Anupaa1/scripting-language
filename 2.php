<?php

class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $description = "Used bicycle";
    public $weight;

    public function __construct($brand, $model, $year, $weight) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->weight = $weight;
    }

    public function getInfo() {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    public function getWeight($inKilograms = false) {
        return $inKilograms ? $this->weight / 1000 : $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }
}

$bike1 = new Bicycle("Giant", "Defy", 2021, 8000);
$bike2 = new Bicycle("Trek", "Emonda", 2022, 9000);

echo $bike1->getInfo() . "<br>";
echo "Weight in kilograms: " . $bike1->getWeight(true) . "<br>";
echo "Weight in grams: " . $bike1->getWeight() . "<br>";

echo $bike2->getInfo() . "<br>";
echo "Weight in kilograms: " . $bike2->getWeight(true) . "<br>";
echo "Weight in grams: " . $bike2->getWeight() . "<br>";

?>
