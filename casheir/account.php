<!--            <h3>Subject Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">Down Payment<span class="required">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="grid-item">
                    <label class="form-label">Amount</label>
                    <input type="text" class="form-control" id="code" name="code">
                </div>

                <div class="grid-item">
                    <label class="form-label">Student Name<span class="required">*</span></label>
                    <select name="teacher_id" class="form-control" required style="height:43px;">
                        <option value="" hidden>Grade Level</option>
                        <?php// while($teacher = mysqli_fetch_assoc($teachers_query)): ?>
                            <option value="<?php //echo $teacher['id']; ?>"><?php //echo $teacher['full_name']; ?></option>
                        <?php // endwhile; ?>
                    </select>
                </div>
            </div>

            <div class="footer">
                <button class="save" type="submit">Save</button>
                <a href="./"><button class="cancel" type="button">Cancel</button></a>
            </div>
                        -->
            

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="google" value="notranslate" />
    <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
    <link rel="stylesheet" href="../style.cssassets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../boostrap/font-awesome/font-awesome.css">
    <title>Add User</title>
</head>

<style>
            /* General Styles */
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .content {
            width: 80%;
            margin-left:auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }


        /* Grid Layout for the form */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 20px;
            padding: 20px 0;
        }

        .grid-item {
            display: flex;
            flex-direction: column;
        }

        /* Form Labels */
        label.form-label {
            font-weight: bold;
            margin-bottom: 8px;
        }

        /* Form Inputs */
        .form-control {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .form-control:focus {
            outline: none;
            border-color: #4CAF50;
        }

        /* Button Styles */
        .footer {
            text-align: right;
            margin-top: 20px;
        }

        .footer button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .save {
            background-color: #4CAF50;
            color: white;
        }

        .save:hover {
            background-color: #45a049;
        }

        .cancel {
            background-color: #f44336;
            color: white;
        }

        .cancel:hover {
            background-color: #e53935;
        }
        .card{
            padding:4px;
            margin-left: 0;
            margin-right:0;
            width: 2rem; 
            text-align:center;
            margin-bottom:50px;
        
        
        }
        .card a{
            text-decoration:none;
            color:black;
        }
        .card i {
            margin-left: 0;
            font-size: 30px; /* Adjust the size as needed */
            display: block; /* Ensures icons are centered within the card */
        }


        /* Responsive adjustments */
        @media (max-width: 768px) {
            .content {
                width: 95%;
            }
        }

</style>
<body>
<?php
        $page = 'casheir';
        include '../navbar.php'; // Include this template code
        include "../database/db.php";  // Include your database connection
        
        // Check if 'id' is passed in the URL
    if (isset($_GET['id'])) {
        $student_id = $_GET['id'];

        // Query to fetch student name and downpayment details
        $query = mysqli_query($conn, "
            SELECT s.id, CONCAT(s.firstname, ' ', s.lastname) AS student_name, 
                   d.amount, d.pay_date
            FROM downpayment d
            LEFT JOIN student s ON d.student_id = s.id
            WHERE s.id = '$student_id'
            LIMIT 1
        ");


    } 
    $row = mysqli_fetch_assoc($query); // Fetch the row data here
?>

    


    <div class="content">
        <div class="card">
        <a href="index.php?page=user" class=""><i class="fa-regular fa-circle-left"></i> </a>
        </div>
        <form class="row g-3" action="../casheir/create.php" method="post">
           <h3>Down Payment</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">Student Name<span class="required">*</span></label>
                    <input type="text" class="form-control" id="student_id" name="student_id" value="<?php echo $student_id; ?>" required>

                </div>

                <div class="grid-item">
                    <label class="form-label">Amount</label>
                    <input type="text" class="form-control" id="amount" name="amount" value="<?php echo htmlspecialchars($row['amount'] ?? ''); ?>">
                </div>
                <div class="grid-item">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" id="pay_date" name="pay_date" value="<?php echo htmlspecialchars($row['pay_date'] ?? ''); ?>">
                </div>

            </div>

            <div class="footer">
                <button class="save" type="submit">Save</button>
                <a href="./"><button class="cancel" type="button">Cancel</button></a>
            </div>
                    
    

        </form>

    </div>
</body>
</html>
