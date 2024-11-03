<!DOCTYPE html>
<?php
session_start();
include '../database/db.php';  // Include your database connection

?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="boostrap/boostcss/boostrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="../boostrap/font-awesome/font-awesome.css">
        <title>Dashboard</title>
        <link rel="icon" type="image/x-icon" href="file_index/image/jhslogo.png">
        <style>
            /* General Styles */
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }

            .content {
            margin-left:auto;
            width: 80%;
            padding: 20px;
        }
             .objective-act{
         display: flex;
         align-items: center;
         padding: 20px;


        }

        .card{
            padding:4px;
            margin-left: 20px;
            width: 8rem; 
            text-align:center;
            border:1px grey solid;
        
        
        }
        .card i {
            margin-left: 20px;
            font-size: 3rem; /* Adjust the size as needed */
            display: block; /* Ensures icons are centered within the card */
        }



        .card-body{
            border:none;
            border-top:grey 1px solid;
            text-align:left;
            
        }


        .card p{
            margin: 0;
            row-gap: 2px;
            gap: 0;
            padding: 0;

        }




        </style>
    </head>
    <body>

    <?php
        $page = 'dashboard';
        include '../navbar.php'; // Include this template code
    ?>


    <div class="content">
    <div class="objective-act">
              <!-- list 0f activity -->
              <div class="card">
              <i class="fa-solid fa-graduation-cap"></i>
                   <p class="card-text" style="text-align:center;">Student</p>
             <div class="card-body">
                   <p class="cards-text">
                   <?php
                     $squery =  mysqli_query($conn, "SELECT COUNT(id) AS total_student FROM `student` Where del_status != 'deleted'");
                     while ($row = mysqli_fetch_array($squery)) { echo $row['total_student']; }
                     ?> 
                   </p>
                 </div>
              </div>
              <div class="card" >
              <i class="fa-solid fa-users"></i>
              <p class="card-text">User</p>
                <div class="card-body">
                   <p class="cards-text" stlye="">
                   <?php
                    $squery =  mysqli_query($conn, "SELECT COUNT(id) AS total_student FROM `user` Where del_status != 'deleted'");
                    while ($row = mysqli_fetch_array($squery)) { echo $row['total_student']; }
                    ?>

                   </p>
                 </div>
              </div>
              <div class="card">
                 <img src="file_index/image/jhslogo.png" class="card-img-top" alt="...">
                 <div class="card-body">
                    <p class="cards-text">Student</p>
                    <p class="card-text">1</p>
                 </div>
              </div>
              <div class="card">
                 <img src="file_index/image/jhslogo.png" class="card-img-top" alt="...">
                 <div class="card-body">
                    <p class="cards-text">Student</p>
                    <p class="card-text">1</p>
                 </div>
              </div>
            </div>
        </div>
 
    </div>

    </body>
    </html>
