<?php

include "../database/db.php";  // Include your database connection

// Get form data
$name = mysqli_real_escape_string($conn, $_POST['name']); // This should be defined
$username = mysqli_real_escape_string($conn, $_POST['username']);
$role = mysqli_real_escape_string($conn, $_POST['role']);
$password = mysqli_real_escape_string($conn, $_POST['password']); // Make sure to hash the password

// Define the SQL query using $squery
$squery = "SELECT * FROM user WHERE username = '$username' AND role = '$role'";

// Execute the query
$result = mysqli_query($conn, $squery);

while ($row = mysqli_fetch_array($result)) {
    $check = $row['username'] . " " . $row['role'];
}

if (empty($check)) {
    // Insert the new user if no match is found
    $sql = "INSERT INTO `user`(`name`, `username`, `role`, `password`) VALUES 
    ('$name', '$username', '$role', '$password')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php?message=Success! Changes have been saved successfully.");
    } 
} else {
    header("Location: add.php?message=Error! Username is already exist.");
}

// Close the connection
?>

