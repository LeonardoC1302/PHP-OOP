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

include 'includes/footer.php';