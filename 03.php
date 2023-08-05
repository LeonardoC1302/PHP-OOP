<?php 
declare (strict_types = 1); // Ensure that types of data are respected
include 'includes/header.php';

// STATIC METHODS
class Product {
    private static $image;
    private static $imagePlaceholder = 'image.jpg';

    public function __construct(protected string $name, public int $price, public bool $available, string $image){
        if($image){
            self::$imagePlaceholder = $image;
        }
    }

    public static function getProduct(){
        echo "Getting product...";
    }

    public static function getImage() : string{
        return self::$imagePlaceholder;
    }
    
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

echo Product::getProduct();
echo Product::getImage();

$product = new Product('Tablet', 2000, true);
$product->showInfo();
// $product->name = 'Tablet';
// $product->price = 2000;
// $product->available = true;

echo "<pre>";
var_dump($product);
echo "</pre>";


include 'includes/footer.php';