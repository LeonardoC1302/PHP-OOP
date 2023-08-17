<?php include 'includes/header.php';

require 'vendor/autoload.php';
// Include classes
// require 'classes/Clients.php';
// require 'classes/Details.php';

// Include classes using namespace
use App\Clients;
use App\Details;

// // Autoload classes (using namespace)
// function myAutoLoad($className){
//     $parts = explode('\\', $className);
//     require __DIR__ . '/classes/' . $parts[1] . '.php';
// }

// spl_autoload_register('myAutoLoad');

// Instantiate the classes (using namespace)
$details = new Details();
$clients = new Clients();



include 'includes/footer.php';