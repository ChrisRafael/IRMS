<!-- header part -->
 <?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['id'])) {
    header("Location: ../index.php");
   
    exit();
} 
include "../database/db.php";  // Include your database connection
$id=$_SESSION["id"];

$sql="SELECT * FROM user WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$role = $row['role'];
 ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap@5.3.0.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/navbar/navbar.css">
    <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">

</head>


<!-- header part -->
<header class="navbar-header">
    <img src="../file_index/image/jhslogo.png" alt="School Logo" class="image-logo">
    <h2 class="title-page">Enrollment Management System</h2>
    <a href="../logout.php" class="tittle-link">Log Out</a>
</header>
<?php ?>

<div class="main-container">
    <!-- Sidebar -->

    <div class="side-container">
        <div class="info">
        <span class="tittle-link" style="color:black;align-text:center;"> <?php echo $name; ?> </span>
        </div>
        <div class="side-bar">
            <ul class="selection">
            <li><a href="../dashboard/" class="<?php if ($page == 'dashboard') echo 'active'; ?>">&nbsp;<i class="bi bi-house"></i> Dashboard</a></li>
                <li><a href="../student/" class="<?php if ($page == 'student') echo 'active'; ?>">&nbsp;<i class="bi bi-person-plus-fill"></i> Student</a></li>
                <li><a href="../profile/" class="<?php if ($page == 'profile') echo 'active'; ?>">&nbsp;<i class="bi bi-person-lines-fill"></i> Profile</a></li>
                <li><a href="../casheir/" class="<?php if ($page == 'casheir') echo 'active'; ?>">&nbsp;<i class="fa-solid fa-coins"></i> Payment</a></li>
                <li><a href="../teacher/" class="<?php if ($page == 'teacher') echo 'active'; ?>">&nbsp;<i class="fa-solid fa-chalkboard-teacher"></i> Teacher</a></li>
                <li><a href="../subject/" class="<?php if ($page == 'subject') echo 'active'; ?>">&nbsp;<i class="fa-solid fa-book-open"></i> Subject</a></li>
               <!-- <li class="dropdown">
                    <a href="#" class="dropbtn">Record</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Student Record</a></li>
                        <li><a href="#">File</a></li>
                    </ul>
                </li> -->
                <!-- dorpdown
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
 
                -->
                <?php if ($role == "admin"){ ?>

                <li><a href="../user/" class="<?php if ($page == 'user') echo 'active'; ?>">&nbsp;<i class="bi bi-person-circle"></i> User</a></li>

                <?php } ?>
            </ul>
        </div>
    </div>

    <!-- Main content area -->
    <div class="content-container">
        <!-- Place main content here -->
    </div>
    <script src="../assets/js/booststrap@5.3.0.js"></script>
</div>

