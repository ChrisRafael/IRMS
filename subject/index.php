<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
            <!-- Include jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="'../assets/js/jquery-3.5.1.js">
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

        <title>User</title>

    </head>
    <style>
                /* General Styles */
                body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }

            .content {
            overflow: hidden;
            margin-left:auto;
            width: 80%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

            /* Header */
            h1 {
            color: #333;
            text-align: center;
            font-size: 30px;
            left:0;
        }

        /* Button and Search Styles */
        .search-box {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .search-box button {
            padding: 10px 15px;
            background-color: #550000;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }


        .search-box button:hover {
            background-color: #7a0000;
        }

        /* Table Styles */
        .data {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        .data th, .data td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .data th {
            background-color: #550000;
            color: white;
        }

        .data tr:hover {
            background-color: #f1f1f1;
        }

        .data td a {
            text-decoration: none;
            color: #000;
        }

        .data td a:hover {
            color: #aaaeb2;
        }

        .action a {
            display: inline-block;
            padding: 6px 10px;
            background-color: #fff;
            color: black;
            border: 1px solid black;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .action a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .search-box {
                flex-direction: column;
                align-items: flex-end;
            }

            .data th, .data td {
                padding: 8px;
            }
        }   
         </style>
    <body>

    <?php
        $page = 'subject';
        include '../navbar.php'; // Include this template code

    ?>


    <div class="content">
        <h1>Subject And Teacher</h1>

        <!-- Add Button -->
        <div class="search-box">
        <div class="search-extend"> 
        <a href="./add.php" class="" ><button style="style: background-color:none ;">Subject List</button></a>
        </div>
        <a href="./assign_subject.php" class="" ><button>Assign Subject</button></a>
        </div>

        <!-- Subject Table -->
        <table id="example" class="data list">
            <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th>teacher</th>
                    <th>Subject</th> <!-- Show subject -->
                    <th>Subject Code</th> <!-- Show subject code -->
                    <th style="width: 55px;">Action</th>
                </tr>
            </thead>
            <tbody id="">
                <?php
                 include "../database/db.php";  // Include your database connection

                // Fetch user data from the database
                
                $squery = mysqli_query($conn, "
                SELECT 
                    a.id,
                    CONCAT(t.first_name, ' ', t.last_name) AS teacher_name,
                    s.subject_code, s.subject,
                    a.grade_lvl
                FROM assign_subject a
                INNER JOIN teacher t ON a.teacher_id = t.id
                INNER JOIN subject s ON a.subject_id = s.id
                WHERE a.del_status = 'active' AND  s.del_status != 'deleted' AND  t.del_status != 'deleted'
                ORDER BY t.first_name, a.grade_lvl;
            ");
                while ($row = mysqli_fetch_array($squery)) { 
                
                ?>
                <tr class="table-row" >
                    <td><?php echo $row ['id']; ?></td>
                    <td><?php echo $row['teacher_name']; ?></td>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['subject_code']; ?></td>
                    <td class="action">
                        <a class="view" href="edit.php?id=<?php  echo $row['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                </tr>
                <?php  } ?>
                
            </tbody>
        </table>

    </div>
    <script>
    new DataTable('#example', {
    order: [[0, 'desc']]
    });
    </script>

    </body>
    </html>
