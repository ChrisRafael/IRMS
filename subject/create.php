<?php
include "../database/db.php";  // Include your database connection

$subject = ucwords($_POST['subject']);
$subject_code = ucwords($_POST['subject_code']);
$grade_level = $_POST['grade_level'];

// Define the SQL query using $squery
$squery = "SELECT * FROM subject WHERE subject_code = '$subject_code' AND del_status != 'deleted'";

// Execute the query
$result = mysqli_query($conn, $squery);

if (mysqli_num_rows($result) === 0) {
    // Insert subject if no match is found
    $sql = "INSERT INTO `subject` (
        `subject`,
        `subject_code`,
        `del_status`
    ) VALUES (
        '$subject',
        '$subject_code',
        'active'
    )";

    if (mysqli_query($conn, $sql)) {
        header("Location: add.php?message=Success! Changes have been saved successfully.");
    } else {
        header("Location: add.php?message=Error! Failed to insert the subject.");
    }
} else {
    header("Location: add.php?message=Error! Subject already exists.");
}
?>
