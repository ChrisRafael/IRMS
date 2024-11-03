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

        <title>User</title>

    </head>
    <script>
        $(document).ready(function(){
            // Search functionality
            $("#MyModal").on("keyup", function(){
                var value = $(this).val().toLowerCase();
                $("#example tbody tr").filter(function(){
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>


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
                    <th style="width: 60px;">ID</th>
                    <th>Name</th>
                    <th>User Name</th> <!-- Show email -->
                    <th>Role</th> <!-- Show LRN Number -->
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
                    <td><?php  echo $row['role']; ?></td> <!-- Display email -->
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
