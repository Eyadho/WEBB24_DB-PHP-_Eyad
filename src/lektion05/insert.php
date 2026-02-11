<?php
// Insert data
require "testDB.php";

$sql = "
INSERT INTO users (name, email)
VALUES ('Ahmad', 'ahmad@test.com')
";

if ($conn->query($sql) === TRUE) {
    echo "New record inserted"; 
} else {
    echo "Error: " . $conn->error;
}
?>
