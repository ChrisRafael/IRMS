<?php
// Make sure to establish the database connection
    include "../database/db.php";  // Include your database connection

$student_id = trim($_POST['student_id']);
$amount = $_POST['amount'];
$pay_date = $_POST['pay_date']; // Use a valid key name here

// Query to check if a record with the same student_id and amount already exists
$squery = "SELECT * FROM `downpayment` WHERE `student_id` = '$student_id' AND `amount` = '$amount'";
$result = mysqli_query($conn, $squery);

// Check if a matching record was found
if (mysqli_num_rows($result) == 0) {
    // Insert the new downpayment if no matching record is found
    $sql = "INSERT INTO `downpayment` (`student_id`, `amount`, `pay_date`) 
            VALUES ('$student_id', '$amount', '$pay_date')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php?message=Success! Saved successfully.");
        exit;
    } else {
        header("Location: account.php?message=Error: Unable to save payment.");
        exit;
    }
} else {
    header("Location: account.php?message=Error! Payment already made.");
    exit;
}

?>
