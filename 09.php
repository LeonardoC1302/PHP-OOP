<?php include 'includes/header.php';

// Connect to DB with mysqli
$db = new mysqli('localhost', 'root', '123', 'realstate_crud');
$query = "SELECT title FROM properties";
/* $result = $db->query($query);
while($row = $result->fetch_assoc()) {
    var_dump($row);
} */
// Prepared Statement
$stmt = $db->prepare($query); // DB prepares for query
$stmt->execute(); // DB executes query
$stmt->bind_result($title); // DB binds result to variable, does not return result

while($stmt->fetch()) { // DB fetches result
    echo $title . '<br>';
}

include 'includes/footer.php';