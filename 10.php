<?php include 'includes/header.php';
// Connect to DB with PDO
$db = new PDO('mysql:host=localhost;dbname=realstate_crud', 'root', '123');

$query = "SELECT title FROM properties";

// Without prepared statement
/*$properties = $db->query($query)->fetchAll();
var_dump($properties);*/

// With prepared statement
$stmt = $db->prepare($query);
$stmt->execute();
$properties = $stmt->fetchAll( PDO :: FETCH_ASSOC);

// Iterate results
foreach ($properties as $property) {
    echo $property['title'] . '<br>';
}


include 'includes/footer.php';