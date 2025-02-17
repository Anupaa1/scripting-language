<?php

interface Vehicle {
    public function startEngine();
    public function stopEngine();
}

class Car implements Vehicle {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->setMake($make);
        $this->setModel($model);
        $this->setYear($year);
    }

    public function start() {
        echo "Car started.<br>";
    }

    public function displayInfo() {
        echo "Make: " . $this->getMake() . ", Model: " . $this->getModel() . ", Year: " . $this->getYear() . "<br>";
    }

    public function getDescription() {
        return "This is a Car.";
    }

    // Encapsulation: Getter and Setter Methods
    public function getMake() {
        return $this->make;
    }

    public function setMake($make) {
        $this->make = $make;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    // Vehicle interface methods
    public function startEngine() {
        echo "Engine started.<br>";
    }

    public function stopEngine() {
        echo "Engine stopped.<br>";
    }
}

class ElectricCar extends Car {
    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function charge() {
        echo "Charging the battery.<br>";
    }

    public function getDescription() {
        return "This is an Electric Car with " . $this->batteryCapacity . " kWh battery.";
    }
}

$car = new Car('Toyota', 'Corolla', 2021);
$car->start();
$car->displayInfo();
$car->startEngine();

$electricCar = new ElectricCar('Tesla', 'Model S', 2023, 75);
$electricCar->charge();
$electricCar->displayInfo();
echo $electricCar->getDescription();

?>
