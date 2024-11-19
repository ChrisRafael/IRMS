            

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="google" value="notranslate" />
    <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
    <link rel="stylesheet" href="../style.cssassets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../boostrap/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/casheir.css">
    <title>Add User</title>
</head>

<body>
<?php
$page = 'casheir';
include '../navbar.php';
include "../database/db.php";

if (isset($_GET['id'])) {
    $student_id = $_GET['id'];

    $query = "SELECT s.id, CONCAT(s.firstname, ' ', s.lastname) AS student_name, 
                     d.amount, d.pay_date
              FROM student s
              LEFT JOIN downpayment d ON d.student_id = s.id
              WHERE s.id = '$student_id' AND s.del_status != 'deleted'";

    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);
        $student_name = $student['student_name'];
        $amount = 'P' . $student['amount'];
        $pay_date = $student['pay_date'];
    } else {
        echo "Student not found or no data available.";
        exit;
    }
} else {
    echo "Student ID not provided.";
    exit;
}
// Include receipt template
//include "../casheir/receipt.php";

?>


    <div class="content">
        <div class="card">
        <a href="index.php?page=user" class=""><i class="fa-regular fa-circle-left"></i> </a>
        </div>
        <form class="row g-3" action="create.php" method="post">
           <h3>Down Payment</h3>
            <div class="grid-container grid-container--fill">
            <div class="grid-item">
                <label class="form-label">Student Name</label>
                <input type="hidden" name="student_id" value="<?php echo $student['id']; ?>">
                <input type="text" class="form-control" value="<?php echo $student['student_name']; ?>" readonly>
            </div>

                <div class="grid-item">
                    <label class="form-label">Amount</label>
                    <input type="text" class="form-control" id="amount" name="amount" value="<?php echo $student['amount']; ?>">
                </div>
                <div class="grid-item">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" id="pay_date" name="pay_date" value="<?php echo $student['pay_date']; ?>" readonly>
                    </div>
                </div>

            <div class="footer">
             <!--   <button class="save" type="submit">Save</button>
                <a href="./"><button class="cancel" type="button">Cancel</button></a>
                <button onclick="window.print();" style="display: block; margin: 20px auto; padding: 10px 20px; background: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
                    Print Receipt
                </button>-->

            </div>
                    

        </form>
        <script>
            //auto fill date
        document.addEventListener('DOMContentLoaded', function () {
            const dateInput = document.getElementById('pay_date');
            if (!dateInput.value) { // Only set if no date is already provided (to preserve existing data).
                const today = new Date();
                const yyyy = today.getFullYear();
                const mm = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-based
                const dd = String(today.getDate()).padStart(2, '0');
                dateInput.value = `${yyyy}-${mm}-${dd}`;
            }
        });
    </script>

    </div>
</body>
</html>
