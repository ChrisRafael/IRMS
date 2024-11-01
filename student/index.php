<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <link rel="stylesheet" href="../assets/css/css.css">
        <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">

    </head>
    <body>

    <?php
        $page = 'student';
        include '../navbar.php'; // Include this template code
        include "../database/db.php";  // Include your database connection
    ?>


    <div class="content">
        <h1>Student List</h1>
        <!-- Add Button -->
        <div class="search-box">

            <a href="student-add.php?page=student" class=""><button>Add Student</button></a>
        </div>

        <!-- Student Table -->
        <table id="example" class="data list">
            <div class="">
                <label for="">
                    search
                <input type="text" name="query" placeholder="Search..." class="search-input">
                </label>
            </div>

            <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th> LRN Number</th>
                    <th>Name</th> <!-- Show email -->
                    <th>Grade Level</th> <!-- Show LRN Number -->
                    <th style="width: 55px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch student data from the database
                
                $squery = mysqli_query($conn, "SELECT * FROM student WHERE del_status != 'deleted' ORDER BY id DESC;");
                while ($row = mysqli_fetch_array($squery)) {
                ?>
                <tr class="table-row">
                    <td><?php  echo $row['id']; ?></td>
                    <td><?php echo $row['lrn']; ?></td> <!-- Display LRN Number -->
                    <td>
                        <div class="profile">
                            <span class="name"><?php  echo $row['firstname'] . " " . $row['lastname']; ?></span>
                        </div>
                    </td>
                    <td><?php  echo $row['grade_lvl']; ?></td> <!-- Display email -->
                    <td class="action">
                        <a class="view" href="edit.php?id=<?php  echo $row['id']; ?>">View</a>
                    </td>
                </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>

    </body>
    </html>
