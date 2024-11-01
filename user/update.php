<?php 

include "../database/db.php";  // Include your database connection

$name = mysqli_real_escape_string($conn, $_POST['name']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$role = mysqli_real_escape_string($conn, $_POST['role']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$id = mysqli_real_escape_string($conn, $_GET['id']); // Note change from $_GET to $_POST


// Prepare the update statement
$sql = "UPDATE `user` SET  `name` = '$name', `username` = '$username',  `role` = '$role', `password` = '$password' WHERE id = '$id'";

// Execute the query and check if it was successful
if (mysqli_query($conn, $sql)) {
    header("Location: index.php?message=Success! Changes have been saved successfully.");
} 
?>
