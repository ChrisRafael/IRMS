<?php
include "../database/db.php";  // Include your database connection

// Get POST data and sanitize it
$subject_id = ucwords(mysqli_real_escape_string($conn, $_POST['subject_id']));
$teacher_id = ucwords(mysqli_real_escape_string($conn, $_POST['teacher_id']));
$grade_level = mysqli_real_escape_string($conn, $_POST['grade_level']);

// Corrected SQL query to check for existing records
$squery = "SELECT * FROM assign_subject 
           WHERE subject_id = '$subject_id' 
           AND teacher_id = '$teacher_id' 
           AND del_status != 'deleted'";

// Execute the query
$result = mysqli_query($conn, $squery);

// Check if the subject already exists
if (mysqli_num_rows($result) > 0) {
    header("Location: assign_subject.php?message=Error! This subject is already assigned to the teacher.");
} else {
    // Insert the data if no existing record is found
    $sql = "INSERT INTO `assign_subject` (
        `subject_id`,
        `teacher_id`,
        `grade_lvl`,
        `del_status`
    ) VALUES (
        '$subject_id',
        '$teacher_id',
        '$grade_level',
        'active'
    )";

    // Execute the query and check for success
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php?message=Success! Changes have been saved successfully.");
    } else {
        header("Location: assign_subject.php?message=Error! Failed to insert the subject. " . mysqli_error($conn));
    }
}
?>
