<?php 
declare (strict_types = 1); // Ensure that types of data are respected
include 'includes/header.php';

// ENCAPSULATION
class Product {
    // Public - Can be accessed from anywhere
    // Protected - Can be accessed from the class or from the class that inherits it
    // Private - Can only be accessed from the class

    public function __construct(protected string $name, public int $price, public bool $available){}
    public function showInfo() : void{
        echo "The product is: " . $this->name . " and the price is: " . $this->price;
    }

    public function getName() : string{
        return $this->name;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
}

$product = new Product('Tablet', 2000, true);
$product->showInfo();
// $product->name = 'Tablet';
// $product->price = 2000;
// $product->available = true;

echo "<pre>";
var_dump($product);
echo "</pre>";


include 'includes/footer.php';