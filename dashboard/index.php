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
        <script src="../assets/js/pei.js"></script>
        <title>Dashboard</title>
        <link rel="icon" type="image/x-icon" href="file_index/image/jhslogo.png">
        <style>
                /* General Styles */
                body {
                    background-color:#FAFAFA;
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
                background:white;
                padding:6px;
                margin-left: 20px;
                width: 10rem;
                text-align:center;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border:1px grey solid;
            
            
            }
            .card i, .card img {
                font-size: 4rem;
                color: #007bff;
                padding-top: 15px;
            }
        
        
            .card-body{
                border-top:grey 1px solid;
                border:none;
                text-align:left;
                
            }
        
        
            .card p{
                text-align:center;
                margin: 0;
                row-gap: 2px;
                gap: 0;
                padding: 0;
            
            }
        
        
            .bar-grap-1{
                background:white;
                padding:6px;
                margin-left: 40px;
                width: 30rem;
                text-align:center;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border:1px grey solid;
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
              <i class="fa-solid fa-user-graduate"></i>
              <p class="card-text" style="text-align:center;">Student</p>
             <div class="card-body" style="border-top:grey 1px solid">
                   <p class="cards-text" style="font-size:20px; text-align:right; font-wieght:20px;">
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
                <div class="card-body" style="border-top:grey 1px solid">
                   <p class="cards-text" style="font-size:20px; text-align:right; font-wieght:20px;">
                   <?php
                    $squery =  mysqli_query($conn, "SELECT COUNT(id) AS total_student FROM `user` Where del_status != 'deleted'");
                    while ($row = mysqli_fetch_array($squery)) { echo $row['total_student']; }
                    ?>

                   </p>
                 </div>
              </div>
              <div class="card">
              <i class="fa-solid fa-chalkboard-user"></i>             
               <p class="cards-text">Teacher</p>
             <div class="card-body" style="border-top:grey 1px solid">
             <p class="cards-text" style="font-size:20px; text-align:right; font-wieght:20px;">
                   <?php
                    $squery =  mysqli_query($conn, "SELECT COUNT(id) AS total_student FROM `teacher` Where del_status != 'deleted'");
                    while ($row = mysqli_fetch_array($squery)) { echo $row['total_student']; }
                    ?>
             </div>
              </div>
              <div class="card">
              <i class="fa-solid fa-atom"></i>
              <p class="cards-text">On Process...</p>
               <div class="card-body" style="border-top:grey 1px solid">
                    <p class="card-text" style="font-size:20px; text-align:right; font-wieght:20px;">0</p>
                 </div>
            </div>
            </div>
                <div class="objective-act">
                        <!--graph-->
                <?php 
                include ('../dashboard/grap.php');
                ?>

                </div>
        </div>
 
    </div>

    </body>
    </html>
