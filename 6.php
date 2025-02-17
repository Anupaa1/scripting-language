<?php

class User {
    protected $name;
    protected $surname;
    protected $username;
    protected $is_admin = false;

    public function __construct($name, $surname, $username) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    public function isAdmin() {
        return $this->is_admin;
    }

    public function printFullName() {
        echo $this->name . " " . $this->surname . ($this->is_admin ? " (admin)" : "") . "<br>";
    }
}

class Customer extends User {
    private $city;
    private $state;
    private $country;

    public function __construct($name, $surname, $username, $city, $state, $country) {
        parent::__construct($name, $surname, $username);
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    public function location() {
        return "$this->city, $this->state, $this->country";
    }
}

class AdminUser extends User {
    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;
    }
}

$customer = new Customer("Alice", "Smith", "alice", "New York", "NY", "USA");
$admin = new AdminUser("Bob", "Jones", "bob");

$customer->printFullName();
echo $customer->location() . "<br>";

$admin->printFullName();

?>
