<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/css.css">
    <title>Student</title>
    <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
    
    <!-- Include jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../assets/js/search.js"></script>
</head>

<body>

<?php
    $page = 'student';
    include '../navbar.php';
    include "../database/db.php";

?>

<div class="content">
    <h1>Student List</h1>

    <div class="search-box">
        <a href="student-add.php?page=student" class=""><button>Add Student</button></a>
    </div>
    
    <div class="MyModal">
        <label for="search-item">
            Search
            <input type="text" id="MyModal" name="search" placeholder="Search..." class="search-input">
        </label>
    </div>




    <!-- Student Table -->
    <table id="example" class="data list">
        <thead>
            <tr>
                <th style="width: 40px;">ID</th>
                <th>LRN Number</th>
                <th>Name</th>
                <th>Grade Level</th>
                <th style="width: 55px;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            // Fetch student data with pagination
            $squery = mysqli_query($conn, "SELECT * FROM student WHERE del_status != 'deleted' ORDER BY id DESC ");
            while ($row = mysqli_fetch_array($squery)) {
            ?>
            <tr class="table-row">
                <td><?php echo $row['id']; ?></td> <!-- Display dynamic row number -->
                <td><?php echo $row['lrn']; ?></td>
                <td>
                    <div class="profile">
                        <span class="name"><?php echo $row['firstname'] . " " . $row['lastname']; ?></span>
                    </div>
                </td>
                <td><?php echo $row['grade_lvl']; ?></td>
                <td class="action">
                    <a class="view" href="view.php?id=<?php echo $row['id']; ?>">Details</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
