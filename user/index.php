<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
        <link rel="stylesheet" href="../assets/css/css.css">
            <!-- Include jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="'../assets/js/jquery-3.5.1.js">
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">


        <title>User</title>

    </head>


    <body>

    <?php
        $page = 'user';
        include '../navbar.php'; // Include this template code
        include "../database/db.php";  // Include your database connection

    ?>


    <div class="content">
        <h1>User List</h1>

        <!-- Add Button -->
        <div class="search-box">

        <a href="add.php?page=user" class=""><button>Add User</button></a>
        </div>

        <!-- Student Table -->
        <table id="example" class="data list">
            <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th>Name</th>
                    <th>User Name</th> <!-- Show email -->
                    <th>Role</th> 
                    <th style="width: 55px;">Action</th>
                </tr>
            </thead>
            <tbody id="">
                <?php

                // Fetch user data from the database
                
                $squery = mysqli_query($conn, "SELECT * FROM user WHERE del_status != 'deleted' ORDER BY id DESC;");
                while ($row = mysqli_fetch_array($squery)) {
                
                ?>
                <tr class="table-row" >
                    <td><?php  echo $row ['id']; ?></td>
                    <td><?php   echo $row['name']; ?></td>
                    <td><?php  echo $row['username']; ?></td>
                    <td><?php  echo $row['role']; ?></td>
                    <td class="action">
                        <a class="view" href="edit.php?id=<?php  echo $row['id']; ?>">View</a>
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
