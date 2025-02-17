<?php

class Product {
    private $description;
    private $quantity;
    private $price;

    public function __construct($description, $quantity, $price) {
        if (!is_string($description)) {
            echo "Error: Description must be a string.<br>";
        }
        if (!is_numeric($quantity) || !is_numeric($price)) {
            echo "Error: Quantity and price must be numbers.<br>";
        }
        $this->description = $description;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function calculatePrice() {
        return $this->quantity * $this->price;
    }
}

$product = new Product("Laptop", 3, 1000);
echo $product->getDescription() . "<br>";
echo "Price: " . $product->calculatePrice() . "<br>";

?>
