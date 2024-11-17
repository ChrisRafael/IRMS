<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="google" value="notranslate" />
    <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/subject.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <title>Add User</title>
</head>

<body>
    <?php
    include "../database/db.php";  // Include your database connection
    $teachers_query = mysqli_query($conn, "SELECT id, CONCAT(first_name, ' ', last_name) AS full_name FROM teacher WHERE del_status != 'deleted'");
    $subject_query = mysqli_query($conn, "SELECT id, subject_code FROM subject WHERE del_status != 'deleted'");
    
    if (!$teachers_query || !$subject_query) {
        die("Error fetching data: " . mysqli_error($conn));
    }

    $page = 'subject';
    include '../navbar.php'; // Include navbar template
    ?>

    <div class="content">
        <a href="./index.php" class=""><i class="fa-solid fa-arrow-left"></i> Back</a>
        <form class="row g-3" action="./create_assign.php" method="post">
            <h3>User Information</h3>
            <div class="grid-container grid-container--fill">
                <!-- Subject Dropdown -->
                <div class="grid-item">
                    <label class="form-label">Subject</label>
                    <select name="subject_id" class="form-control" required style="height:43px;">
                        <option value="" hidden>Select a Subject</option>
                        <?php while ($subject = mysqli_fetch_assoc($subject_query)): ?>
                            <option value="<?php echo htmlspecialchars($subject['id']); ?>">
                                <?php echo htmlspecialchars($subject['subject_code']); ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <!-- Teacher Dropdown -->
                <div class="grid-item">
                    <label class="form-label">Teacher</label>
                    <select name="teacher_id" class="form-control" required style="height:43px;">
                        <option value="" hidden>Select a Teacher</option>
                        <?php while ($teacher = mysqli_fetch_assoc($teachers_query)): ?>
                            <option value="<?php echo htmlspecialchars($teacher['id']); ?>">
                                <?php echo htmlspecialchars($teacher['full_name']); ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <!-- Grade Level Dropdown -->
                <div class="grid-item">
                    <label class="form-label">Grade Level</label>
                    <select name="grade_level" class="form-control" required style="height:43px;">
                        <option value="" hidden>Select Grade Level</option>
                        <option value="7">Grade 7</option>
                        <option value="8">Grade 8</option>
                        <option value="9">Grade 9</option>
                        <option value="10">Grade 10</option>
                    </select>
                </div>
            </div>

            <div class="footer">
                <button class="save" type="submit">Save</button>
                <a href="./" class="cancel">Cancel</a>
            </div>
        </form>
    </div>

    <script>
        // Add JavaScript for interactive features if needed
    </script>
</body>
</html>
