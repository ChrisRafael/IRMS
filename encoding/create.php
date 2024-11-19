<?php
include "../database/db.php";  // Include your database connection

$student_id = trim($_POST['student_id']);
$subject_id = $_POST['subject_id'];
$room = $_POST['room'];

$squery = "SELECT * FROM `student_subject` WHERE `student_id` = '$student_id' AND `del_status` != 'deleted'";
$result = mysqli_query($conn, $squery);

if (mysqli_num_rows($result) > 0) {
    // Insert a new record 
    $insert_query = "INSERT INTO `student_subject`(
        `student_id`,
        `subject_id`,
        `room`,
        `del_status`
    )
    VALUES( 
        '$student_id',
        '$subject_id',
        '$room',
        'active'
    )";

    if (mysqli_query($conn, $insert_query)) {
        header("Location: index.php?message=Success! saved successfully.");
        exit;
    } else {
        header("Location: encode.php?message=Error: Unable to save .");
        exit;
    }
}
?>

HP@DESKTOP-APJSEI4 MINGW64 ~/Desktop

