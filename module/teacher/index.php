<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student</title>
        <style>
            /* General Styles */
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }

            .content-container {
                width: 100%;
                margin: 40px auto;
                padding: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            /* Header */
            h1 {
                color: #333;
                text-align: center;
            }

            /* Search and Add Button */
            .search-box {
                display: flex;
                justify-content: flex-end;
                margin-bottom: 20px;
            }

            .search-box a {
                text-decoration: none;
            }

            .search-box button {
                padding: 10px 15px;
                background-color: #550000;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            .search-box button:hover {
                background-color: #45a049;
            }

            /* Table Styles */
            .data {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            .data th, .data td {
                padding: 12px 15px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            .data th {
                background-color:#550000;
                color: white;
            }

            .data tr:hover {
                background-color: #f1f1f1;
            }

            .data td a {
                text-decoration: none;
                color: black;
            }

            .data td a:hover {
                color: #0b7dda;
            }

            .profile {
                display: flex;
                align-items: center;
            }

            .name {
                margin-left: 10px;
            }

            .action {
                display: flex;
                gap: 10px;
            }

            .action a {
                padding: 6px 10px;
                background-color: #ed8888;
                color: white;
                border-radius: 4px;
                text-decoration: none;
            }

            .action a:hover {
                background-color: #f58989;
            }

            /* Responsive Adjustments */
            @media (max-width: 768px) {
                .content-container {
                    width: 95%;
                }

                .data th, .data td {
                    padding: 8px 10px;
                }
            }
        </style>
    </head>
    <body>

    <?php 
    $page = 'student';

    ?>

    <div class="content-container">
        <h1>Teacher List</h1>

        <!-- Add Button -->
        <div class="search-box">
            <?php 
            include "includes/alertmassage.php";
            ?>

            <a href="?page=teacher_add" class="<?php echo ($page == 'teacher_add') ? 'active' : ''; ?>"><button>Add Teacher</button></a>
        </div>

        <!-- teacher Table -->
        <table id="example" class="data list">
            <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th>Name</th>
                    <th>Email</th> <!-- Show email -->
                    <th>Employee ID</th> <!-- Show LRN Number -->
                    <th style="width: 55px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch student data from the database
                /* 
                $squery = mysqli_query($conn, "SELECT * FROM student WHERE del_status != 'deleted' ORDER BY id DESC;");
                while ($row = mysqli_fetch_array($squery)) {
                */
                ?>
                <tr class="table-row">
                    <td><?php // echo $row['id']; ?></td>
                    <td>
                        <div class="profile">
                            <span class="name"><?php // echo $row['first_name'] . " " . $row['last_name']; ?></span>
                        </div>
                    </td>
                    <td><?php // echo $row['email']; ?></td> <!-- Display email -->
                    <td><?php // echo $row['lrn_number']; ?></td> <!-- Display LRN Number -->
                    <td class="action">
                        <a class="view" href="edit.php?id=<?php // echo $row['id']; ?>">View</a>
                    </td>
                </tr>
                <?php // } ?>
            </tbody>
        </table>
        <div class="">
            <?php 
            $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
            switch ($page) {
                case 'teacher_add':
                    include 'index/teacher/add.php';
                    break;
                default:
                echo '';
                break;
            }

            ?>
        </div>

    </div>

    </body>
    </html>
