<?php 
include "../database/db.php";  // Include your database connection

$first_name = ucwords($_POST['first_name']);
$middle_name = ucwords($_POST['middle_name']);
$last_name = ucwords($_POST['last_name']);
$suffix = ($_POST['suffix']);
$gender = ($_POST['gender']);
$email = ($_POST['email']);
$contact_number = ($_POST['contact_number']);
$username = ($_POST['username']);
$password = ($_POST['password']);
$id = $_GET['id'];

$sql = "UPDATE `teacher` SET 
`first_name`='$first_name',
`middle_name`='$middle_name',
`last_name`='$last_name',
`suffix`='$suffix',
`gender`='$gender',
`email`='$email',
`contact`='$contact_number',
`username`='$username',
`password`='$password'
WHERE id = '$id'";

mysqli_query($conn, $sql) or die(mysqli_error($conn));

header("location:index.php?message=Success! Changes have been saved successfully.");
?>
