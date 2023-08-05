<?php include 'includes/header.php';

class Transport {
    public function __construct(protected int $wheels, protected int $capacity){ 
    }
    public function getInfo() : string {
        return "The transport has " . $this->wheels . " wheels and a capacity of " . $this->capacity . " people.";
    }
    // Getters and setters
    public function getWheels() : int {
        return $this->wheels;
    }
    public function setWheels(int $wheels) : void {
        $this->wheels = $wheels;
    }
    public function getCapacity() : int {
        return $this->capacity;
    }
    public function setCapacity(int $capacity) : void {
        $this->capacity = $capacity;
    }
}

class Bicycle extends Transport {
    public function getInfo() : string {
        return "The bicycle has " . $this->wheels . " wheels and a capacity of " . $this->capacity . " people and DOES NOT use gas.";
    }
}

class Car extends Transport {
    public function __construct(protected int $wheels, protected int $capacity, protected string $color){ 
    }
    public function getColor() : string {
        return $this->color;
    }
    public function setColor(string $color) : void {
        $this->color = $color;
    }
}

$bicycle = new Bicycle(2, 1);
echo $bicycle->getInfo();

echo "<hr>";

$car = new Car(4, 5, 'white');
echo $car->getInfo();

include 'includes/footer.php';