<?php
$page = 'encode';
include '../navbar.php'; // Include navbar template
include "../database/db.php"; // Include database connection

if (isset($_GET['id'])) {
    $student_id = mysqli_real_escape_string($conn, $_GET['id']); // Escape input

    // Fetch student details
    $query = "
        SELECT s.id, CONCAT(s.firstname, ' ', s.lastname) AS student_name, s.grade_lvl
        FROM student s
        WHERE s.id = ? AND s.del_status != 'deleted'
    ";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $student = $result->fetch_assoc();
        $grade_level = $student['grade_lvl'];

        // Fetch subjects based on grade level
        $query = "
            SELECT DISTINCT s.id AS subject_id, s.subject_code, s.subject 
            FROM subject s
            INNER JOIN assign_subject a ON s.id = a.subject_id
            WHERE a.grade_lvl = ? AND s.del_status != 'deleted'
        ";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $grade_level);
        $stmt->execute();
        $subject_query = $stmt->get_result();
        $subjects = $subject_query->fetch_all(MYSQLI_ASSOC);
    } else {
        header("Location: index.php?error=Student not found.");
        exit;
    }
} else {
    header("Location: index.php?error=Student ID missing.");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="google" value="notranslate" />
    <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Add User</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .content {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        label {
            font-weight: bold;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
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
        .footer .save {
            background-color: #4CAF50;
            color: white;
        }
        .footer .cancel {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
<div class="content">
    <a href="./" class="back-link">Back</a>
    <form action="../encoding/create.php" method="post">
        <h3>User Information</h3>
        <div class="grid-container">
            <div>
                <label>Grade Level:</label>
                <input type="text" class="form-control" value="<?php echo htmlspecialchars($student['grade_lvl']); ?>" readonly>
            </div>
            <div>
                <label>Student Name:</label>
                <input type="hidden" name="student_id" value="<?php echo $student['id']; ?>">
                <input type="text" class="form-control" value="<?php echo htmlspecialchars($student['student_name']); ?>" readonly>
            </div>
            <div>
                <label>Subjects:</label>
                <div id="subject-container">
                    <div class="subject-row">
                        <select name="subject_ids[]" class="form-control" required>
                            <option value="" hidden>Select Subject</option>
                            <?php foreach ($subjects as $subject): ?>
                                <option value="<?php echo htmlspecialchars($subject['subject_id']); ?>">
                                    <?php echo htmlspecialchars($subject['subject_code']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <button type="button" id="add-subject" style="margin-top: 10px;">Add Another Subject</button>
            </div>
            <div>
                <label>Room:</label>
                <input type="text" class="form-control" name="room">
            </div>
        </div>
        <div class="footer">
            <button class="save" type="submit">Save</button>
            <a href="./" class="cancel">Cancel</a>
        </div>
    </form>
</div>
<script>
    const subjects = <?php echo json_encode($subjects); ?>;

    document.getElementById('add-subject').addEventListener('click', function () {
        const subjectContainer = document.getElementById('subject-container');
        const newSubjectRow = document.createElement('div');
        newSubjectRow.classList.add('subject-row');
        newSubjectRow.innerHTML = `
            <select name="subject_ids[]" class="form-control" required>
                <option value="" hidden>Select Subject</option>
                ${subjects.map(subject => 
                    `<option value="${subject.subject_id}">${subject.subject_code}</option>`
                ).join('')}
            </select>
        `;
        subjectContainer.appendChild(newSubjectRow);
    });
</script>
</body>
</html>
