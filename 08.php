<?php include 'includes/header.php';

// Include classes
// require 'classes/Clients.php';
// require 'classes/Details.php';

// Autoload classes
function myAutoLoad($className){
    require __DIR__ . '/classes/' . $className . '.php';
}

spl_autoload_register('myAutoLoad');

// Instantiate the classes
$details = new Details();
$clients = new Clients();



include 'includes/footer.php';