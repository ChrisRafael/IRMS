<?php 
include "../database/db.php";  // Include your database connection

$firstname = mysqli_real_escape_string($conn, $_POST['first_name']);
$middlename = mysqli_real_escape_string($conn, $_POST['middle_name']);
$lastname = mysqli_real_escape_string($conn, $_POST['last_name']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
$birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
$birthplace = mysqli_real_escape_string($conn, $_POST['birthplace']);
$nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
$religion = mysqli_real_escape_string($conn, $_POST['religion']);
$father_name = mysqli_real_escape_string($conn, $_POST['father_name']);
$father_occupation = mysqli_real_escape_string($conn, $_POST['father_occupation']);
$father_contact = mysqli_real_escape_string($conn, $_POST['father_contact']);
$mother_name = mysqli_real_escape_string($conn, $_POST['mother_name']);
$mother_occupation = mysqli_real_escape_string($conn, $_POST['mother_occupation']);
$mother_contact = mysqli_real_escape_string($conn, $_POST['mother_contact']);
$guardian_name = mysqli_real_escape_string($conn, $_POST['guardian_name']);
$guardian_contact = mysqli_real_escape_string($conn, $_POST['guardian_contact']);
$elementary_name = mysqli_real_escape_string($conn, $_POST['elementary_name']);
$elementary_address = mysqli_real_escape_string($conn, $_POST['elementary_address']);
$elementary_year = mysqli_real_escape_string($conn, $_POST['elementary_year']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$grade_level = mysqli_real_escape_string($conn, $_POST['grade_level']);
$lrn_number = mysqli_real_escape_string($conn, $_POST['lrn_number']);
$id = mysqli_real_escape_string($conn, $_GET['id']); // Note change from $_GET to $_POST

// Prepare the update statement
$sql = "UPDATE `student` SET
    `firstname` = '$firstname',
    `middlename` = '$middlename',
    `lastname` = '$lastname',
    `suffix` = '$gender',
    `gender` = '$gender',
    `age` = '$age',
    `address` = '$address',
    `contact` = '$contact_number',
    `birthdate` = '$birthdate',
    `birthplace` = '$birthplace',
    `nationality` = '$nationality',
    `religion` = '$religion',
    `father_name` = '$father_name',
    `father_occupation` = '$father_occupation',
    `father_contact` = '$father_contact',
    `mother_name` = '$mother_name',
    `mother_occupation` = '$mother_occupation',
    `mother_contact` = '$mother_contact',
    `guardian_name` = '$guardian_name',
    `guardian_contact` = '$guardian_contact',
    `es_name` = '$elementary_name',
    `es_address` = '$elementary_address',
    `ey_graduate` = '$elementary_year',
    `email` = '$email',
    `grade_lvl` = '$grade_level',
    `lrn` = '$lrn_number'
    WHERE
    id = '$id'";

// Execute the query and check if it was successful
if (mysqli_query($conn, $sql)) {
    header("Location: index.php?message=Success! Changes have been saved successfully.");
} else {
    echo "Error updating record: " . mysqli_error($conn); // Adds error handling
}

?>
