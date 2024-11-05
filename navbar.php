<!-- header part -->

<style>/* CSS styles (same as before) */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .navbar-header {
            position: fixed;
            display: flex;
            width: 100%;
            background-color: #550000;
            height: 50px;
            justify-content: space-between;
            border-bottom: 1px black solid;
        }
        .tittle-link {
            padding: 12px 0px;
            text-align: right;
            text-decoration: none;
            color: whitesmoke;
            font-size: 18px;
            margin-right: 10px;
        }
        .title-page {
            padding: 12px 0px;
            color: whitesmoke;
            font-size: 18px;
            text-align: left;
        }
        .image-logo {
            width: 55px;
            margin-left: 5px;
        }
        .main-contianer {
            display: flex;
        }
        .side-contianer {
            margin-top: 50px;
            width: 20%;
            height: 95vh;
            background-color: ghostwhite;
            border-right: 1px solid grey;
            position: fixed;
        }
        .content-contianer {
            margin-top: 50px;
            margin-left: 20%;
            width: 80%;
        }
        .side-bar ul {
            list-style-type: none;
            padding: 5px;
        }

        .side-bar ul li a {
            display: block;
            color: black;
            text-align: left;
            margin: 5px 0px;
            border: 1px solid black;
            padding: 14px 0px;
            text-decoration: none;
            border-radius: 8px;
        }
        .side-bar ul li a.active, .side-bar ul li a:hover {
            background-color: #555;
            color: white;
        }
        .dropdown-content {
            display: none;
            background-color: ghostwhite;
            border-radius: 8px;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        @media (max-width: 768px) {
            /* Adjust sidebar for smaller screens */
            .side-contianer {
                height: auto;
                position: static;
            }
        
            /* Adjust the content area */
            .content-contianer {
                margin-left: 0;
            }
        
            /* Dropdown button adjustments */
            .dropdown .dropbtn {
                padding: 14px 20px;
                text-align: center;
            }
        
            /* Make dropdown content take full width */
            .dropdown-content {
                position: relative;
                width: 100%;
            }
        }
        
        @media (max-width: 480px) {
            /* Adjust navbar for very small screens */
            .navbar-header {
                flex-direction: column;
                height: auto;
                align-items: center;
            }
        }
</style>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boostrap/boostcss/boostrap.min.css">
    <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
</head>
<!-- header part -->
<header class="navbar-header">
        <img src="../file_index/image/jhslogo.png" alt="" class="image-logo">
        <h2 class="title-page">Integrated Record Management System</h2>
        <a href="../logout.php" class="tittle-link">Log Out</a>

    </header>
    <?php 
    ?>
<div class="main-contianer">
        <!-- Sidebar -->
        <div class="side-contianer">
                    <div class="side-bar">
                
                <ul class="selection">
                    <!-- Dashboard -->
                    <li class="" >
                        <a href="../dashboard/" class="<?php if ($page == 'dashboard') {echo 'active';} ?>"> &nbsp; <i class="bi bi-house"></i> Dashboard</a>
                    </li>
                    <li class="">
                        <a href="../student/" class="<?php if ($page == 'student') {echo 'active';} ?>"> &nbsp; <i class="bi bi-person-plus-fill"></i> &nbsp;Student</a>
                    </li>
                    <li>
                    <a href="../profile/" class="<?php if ($page == 'profile') {echo 'active';} ?>">&nbsp;<i class="bi bi-person-lines-fill"></i>&nbsp;Profile</a>
                    </li>
                    <li>
                    <a href="../casheir/" class="<?php if ($page == 'casheir') {echo 'active';} ?>">&nbsp;<i class="bi bi-wallet-fill"></i>&nbsp;Payment</a>
                    </li>


                    <!-- Dropdown for Student -->
                   <li class="dropdown">
                        <a href="#" class="dropbtn">&nbsp;Record</a>
                        <ul class="dropdown-content">
                            <li class="drop-list"><a href="" class="">student Record</a></li>
                            <li class="drop-list"><a href="" class="">FIle</a></li>
                        </ul>
                    </li> 
                    <li>
                    <a href="../user/" class="<?php if ($page == 'user') {echo 'active';} ?>">&nbsp; <i class="bi bi-person-circle"></i>&nbsp;User</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main content area -->
        <div class="content">
        </div>
    </div>