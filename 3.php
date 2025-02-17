<?php

class Student {
    public $name;
    public $surname;
    public $country;
    private $tuition;
    protected $indexNumber;

    public function helloWorld() {
        return "Hello World<br>";
    }

    // helloFamily() remains protected
    protected function helloFamily() {
        return "Hello Family<br>";
    }

    private function helloMe() {
        return "Hello me!<br>";
    }

    public function getTuition() {
        return $this->tuition;
    }

    public function __construct($name, $surname, $country, $tuition) {
        $this->name = $name;
        $this->surname = $surname;
        $this->country = $country;
        $this->tuition = $tuition;
    }
}

class PartTimeStudent extends Student {
    public function helloParent() {
        return $this->helloFamily();  // Accesses protected method from parent
    }
}

$student = new Student("John", "Doe", "USA", 10000);
$partTimeStudent = new PartTimeStudent("Jane", "Doe", "USA", 5000);

echo $student->helloWorld();
echo $student->getTuition() . "<br>"; // Correctly accessing public method

// This will throw an error as helloFamily() is protected
// echo $student->helloFamily();  // Uncommenting this will cause the error

echo $partTimeStudent->helloParent();  // This works as helloFamily() is protected and accessible from subclass

?>
