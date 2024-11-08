<!-- header part -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap@5.3.0.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
    <style>
        /* CSS styles */
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
        .main-container {
            display: flex;
        }
        .side-container {
            margin-top: 50px;
            width: 20%;
            height: 95vh;
            background-color: ghostwhite;
            border-right: 1px solid grey;
            position: fixed;
        }
        .content-container {
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
            margin: 5px 0;
            padding: 14px;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
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
        .dropdown-button{
           border:none; 
            background-color: ghostwhite;
            border-radius: 8px;
            margin: 5px 0;
            padding: 14px;

        }

        
        
        @media (max-width: 768px) {
            .side-container {
                height: auto;
                position: static;
            }
            .content-container {
                margin-left: 0;
            }
            .dropdown .dropbtn {
                padding: 14px 20px;
                text-align: center;
            }
            .dropdown-content {
                position: relative;
                width: 100%;
            }
        }
        
        @media (max-width: 480px) {
            .navbar-header {
                flex-direction: column;
                height: auto;
                align-items: center;
            }
        }
    </style>
</head>
<body>

<?php
include "../database/db.php";  // Include your database connection

// Make sure to fetch data from the database if necessary
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    // Retrieve user data from the database if needed
    // Example: $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $username;  // Assuming $username is already defined
    // $_SESSION['id'] = $row['id'];  // Uncomment and set as needed
}
?>

<!-- header part -->
<header class="navbar-header">
    <img src="../file_index/image/jhslogo.png" alt="School Logo" class="image-logo">
    <h2 class="title-page">Enrollment Management System</h2>
    <a href="../logout.php" class="tittle-link">Log Out</a>
</header>

<div class="main-container">
    <!-- Sidebar -->
    <div class="side-container">
        <div class="side-bar">
            <span class="tittle-link">Welcome, <?php echo htmlspecialchars($username); ?> </span>
            <ul class="selection">
            <li><a href="../dashboard/" class="<?php if ($page == 'dashboard') echo 'active'; ?>">&nbsp;<i class="bi bi-house"></i> Dashboard</a></li>
                <li><a href="../student/" class="<?php if ($page == 'student') echo 'active'; ?>">&nbsp;<i class="bi bi-person-plus-fill"></i> Student</a></li>
                <li><a href="../profile/" class="<?php if ($page == 'profile') echo 'active'; ?>">&nbsp;<i class="bi bi-person-lines-fill"></i> Profile</a></li>
                <li><a href="../casheir/" class="<?php if ($page == 'casheir') echo 'active'; ?>">&nbsp;<i class="fa-solid fa-coins"></i> Payment</a></li>
                <li><a href="../teacher/" class="<?php if ($page == 'teacher') echo 'active'; ?>">&nbsp;<i class="fa-solid fa-chalkboard-teacher"></i> Teacher</a></li>
               <!-- <li class="dropdown">
                    <a href="#" class="dropbtn">Record</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Student Record</a></li>
                        <li><a href="#">File</a></li>
                    </ul>
                </li> -->
                <!-- dorpdown-->
                <div class="dropdown">
                  <button class="dropdown-button" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                  </button>
                  <ul class="dropdown-content">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
                <li><a href="../user/" class="<?php if ($page == 'user') echo 'active'; ?>">&nbsp;<i class="bi bi-person-circle"></i> User</a></li>
            </ul>
        </div>
    </div>

    <!-- Main content area -->
    <div class="content-container">
        <!-- Place main content here -->
    </div>
    <script src="../assets/js/booststrap@5.3.0.js"></script>
</div>

</body>
</html>
