<?php
include 'db_connection.php';

$id = 1;
$new_email = "new.email@example.com";

$sql = "UPDATE users SET email='$new_email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>