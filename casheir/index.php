<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account</title>
        <link rel="stylesheet" href="../assets/css/css.css">
        <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="'../assets/js/jquery-3.5.1.js">
        <script src="../assets/js/search.js"></script>


    </head>
    <body>

    <?php
        $page = 'casheir';
        include '../navbar.php'; // Include this template code
    ?>


    <div class="content">
        <h1>Student List</h1>

        <!-- Add Button -->
        <div class="search-box">

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
                    <th>Amount</th> <!-- Show email -->
                    <th>Date</th> <!-- Show LRN Number -->
                    <th style="width: 55px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch student data from the database
                include "../database/db.php";  // Include your database connection

                
                $squery = mysqli_query
                ($conn, "
                    SELECT s.id, CONCAT(s.firstname, ' ', s.lastname) AS student_name, 
                           d.amount, d.pay_date
                    FROM student s
                    LEFT JOIN downpayment d ON d.student_id = s.id 
                    WHERE s.del_status != 'deleted' 
                    ORDER BY s.id;  "
                ); 
                while ($row = mysqli_fetch_array($squery)) { 
 
             ?>  
                <tr class="table-row">
                    <td><?php echo $row['id']; ?></td>
                    <td>
                        <div class="profile">
                            <span class="name"><?php echo $row['student_name']; ?></span>
                        </div>
                    </td>
                    <td>P<?php echo $row['amount']; ?></td> <!-- Display amount or "N/A" -->
                    <td><?php echo $row['pay_date']; ?></td> <!-- Display pay_date or "N/A" -->
                    <td class="action">
                        <a class="view" href="account.php?id=<?php  echo $row['id']; ?>">View</a>
                    </td>
                </tr>
                <?php
                }
          
                ?>
            </tbody>
        </table>
    </div>

    </body>
    </html>
