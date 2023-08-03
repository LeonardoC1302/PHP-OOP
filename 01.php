<?php 
declare (strict_types = 1); // Ensure that types of data are respected
include 'includes/header.php';

// Define a class
class Product {
    public $name;
    public $price;
    public $available;
    // Create a constructor
    public function __construct(string $name, int $price, bool $available)
    {
        // Assign values
        $this->name = $name;
        $this->price = $price;
        $this->available = $available;
    }
    // IN PHP 8.0 we can use this syntax to define the constructor
    // public function __construct(public string $name, public int $price, public bool $available) {}
}

$product = new Product('Tablet', 2000, true);
$product->name = 'Tablet';
$product->price = 2000;
$product->available = true;

echo "<pre>";
var_dump($product);
echo "</pre>";


include 'includes/footer.php';