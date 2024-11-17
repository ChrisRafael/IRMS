<?php 

include "../database/db.php";  // Include your database connection

$student_id = trim($_POST['student_id']);
$amount = $_POST['amount'];
$pay_date = $_POST['pay_date']; 
$id = mysqli_real_escape_string($conn, $_GET['id']); // Note change from $_GET to $_POST



// Prepare the update statement
$sql = "UPDATE
    `downpayment`
SET
    `student_id` = '$student_id',
    `amount` = '$amount',
    `pay_date` = '$pay_date'
    'del_status' != 'deleted'
WHERE
 id = '$id'";

// Execute the query and check if it was successful
if (mysqli_query($conn, $sql)) {
    header("Location: index.php?message=Success! Changes have been saved successfully.");
} 
?>
