<?php
// Include your database connection
include "../database/db.php";

$student_id = trim($_POST['student_id']);
$amount = $_POST['amount'];
$pay_date = $_POST['pay_date'];

// Validate inputs
if (empty($student_id) || empty($amount) || empty($pay_date)) {
    header("Location: account.php?message=Error: All fields are required.");
    exit;
}

// Query to check for an existing record
$squery = "SELECT * FROM `downpayment` WHERE `student_id` = '$student_id' AND `del_status` != 'deleted'";
$result = mysqli_query($conn, $squery);

if (mysqli_num_rows($result) > 0) {
    // Update the existing record
    $update_query = "UPDATE `downpayment` 
                     SET `amount` = '$amount', `pay_date` = '$pay_date' 
                     WHERE `student_id` = '$student_id' AND `del_status` != 'deleted'";

    if (mysqli_query($conn, $update_query)) {
        header("Location: index.php?message=Success! Payment updated successfully.");
        exit;
    } else {
        header("Location: account.php?message=Error: Unable to update payment.");
        exit;
    }
} else {
    // Insert a new record if none exists
    $insert_query = "INSERT INTO `downpayment` (`student_id`, `amount`, `pay_date`, `del_status`) 
                     VALUES ('$student_id', '$amount', '$pay_date', 'active')";

    if (mysqli_query($conn, $insert_query)) {
        header("Location: index.php?message=Success! Payment saved successfully.");
        exit;
    } else {
        header("Location: account.php?message=Error: Unable to save payment.");
        exit;
    }
}
?>
