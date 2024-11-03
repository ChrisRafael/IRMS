<?php
include '../database/db.php';  // Include your database connection file

// Retrieve and sanitize form inputs
$first_name = trim($_POST['first_name']);
$middle_name = trim($_POST['middle_name']);
$last_name = trim($_POST['last_name']);
$suffix = trim($_POST['suffix']);
$gender = $_POST['gender'];
$age = $_POST['age'];
$address = trim($_POST['address']);
$contact_number = $_POST['contact_number'];
$birthdate = $_POST['birthdate'];
$birthplace = trim($_POST['birthplace']);
$nationality = trim($_POST['nationality']);
$religion = trim($_POST['religion']);
$father_name = trim($_POST['father_name']);
$father_occupation = trim($_POST['father_occupation']);
$father_contact = $_POST['father_contact'];
$mother_name = trim($_POST['mother_name']);
$mother_occupation = trim($_POST['mother_occupation']);
$mother_contact = $_POST['mother_contact'];
$guardian_name = trim($_POST['guardian_name']);
$guardian_contact = $_POST['guardian_contact'];
$elementary_name = trim($_POST['elementary_name']);
$elementary_address = trim($_POST['elementary_address']);
$elementary_year = $_POST['elementary_year'];
$email = trim($_POST['email']);
$lrn_number = trim($_POST['lrn_number']);
$grade_level = $_POST['grade_level'];

// Check if LRN already exists
$squery = "SELECT * FROM student WHERE lrn = '$lrn_number'";
$result = mysqli_query($conn, $squery);

$check = "";
while ($row = mysqli_fetch_array($result)) {
    $check = $row['lrn'];
}

if (empty($check)) {
    // Insert the new student if no matching LRN is found
    $sql = "INSERT INTO `student` (firstname, middlename, lastname, suffix, gender, age, address, contact, birthdate, birthplace, nationality, religion, father_name, father_occupation, father_contact, mother_name, mother_occupation, mother_contact, guardian_name, guardian_contact, es_name, es_address, ey_graduate, email, grade_lvl, lrn, del_status) 
            VALUES ('$first_name', '$middle_name', '$last_name', '$suffix', '$gender', '$age', '$address', '$contact_number', '$birthdate', '$birthplace', '$nationality', '$religion', '$father_name', '$father_occupation', '$father_contact', '$mother_name', '$mother_occupation', '$mother_contact', '$guardian_name', '$guardian_contact', '$elementary_name', '$elementary_address', '$elementary_year', '$email', '$grade_level', '$lrn_number', 'active')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php?message=Success! Saved successfully.");
        exit;
    } else {
        header("Location: student-add.php?message=Error saving student.");
        exit;
    }
} else {
    header("Location: student-add.php?message=Error! LRN already exists.");
    exit;
}
?>
