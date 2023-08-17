<?php include 'includes/header.php';

interface TransportInterface {
    public function getInfo() : string;
    public function getWheels() : int;
}
class Transport implements TransportInterface{
    public function __construct(protected int $wheels, protected int $capacity){ 
    }
    public function getInfo() : string {
        return "The transport has " . $this->wheels . " wheels and a capacity of " . $this->capacity . " people.";
    }
    public function getWheels() : int {
        return $this->wheels;
    }
}

// Polymorphism
class Vehicle extends Transport implements TransportInterface{
    public function __construct(protected int $wheels, protected int $capacity, protected string $color){ 
    }
    public function getInfo() : string {
        return "The vehicle has " . $this->wheels . " wheels and a capacity of " . $this->capacity . " people and is " . $this->color . ".";
    }
}

echo "<pre>";
var_dump($vehicle = new Vehicle(4, 5, 'red'));
echo "</pre>";

echo $vehicle->getInfo();

include 'includes/footer.php';