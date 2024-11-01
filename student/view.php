

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="google" value="notranslate" />
    <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Add Student</title>
</head>
<body>
<?php
        $page = 'student';
        include '../navbar.php'; // Include this template code
        include '../database/db.php';
    ?>
    <div class="content">
        <div class="header">
            <h1>Student information </h1>
        </div>

        <form class="row g-3" action="../student/create.php" method="post">
        <?php
            // Fetch student data from the database
            $id = $_GET['id'];

            // Check if connection is established
            $squery = mysqli_query($conn, "SELECT * FROM student WHERE id = '$id'");
            while ($row = mysqli_fetch_array ($squery)) {
                # code...
            ?>
                <div class="footer">
                <a href="../student/index.php"><button class="cancel" type="button">Cancel</button></a>
            </div>

            <div class=""><i class="fa-solid fa-arrow-left"></i></div>
            <div class="image" id="image">
                <img src="../../assets/img/default.jpeg" alt="">
                <input type="text" hidden name="imageValue" value="default.jpeg">
            </div>

            <h3>Personal Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <span class="form-text">First Name</span>
                    <span class="form-label"> <b><?php echo $row['firstname'] ?></b> </span>
                </div>

                <div class="grid-item">
                    <span class="form-text">Middle Name</span>
                    <span class="form-label"><?php echo $row['middlename'] ?></span>
                   
                </div>

                <div class="grid-item">
                    <span class="form-text">Last Name</span>
                    <span class="form-label"><?php echo $row['lastname'] ?></span>
                   
                </div>

                <div class="grid-item">
                    <span class="form-label">Suffix</span>
                    <span class="form-label"><?php echo $row['suffix'] ?></span>
                </div>

                <div class="grid-item">
                    <span class="form-label">Gender</span>
                    <span class="form-label"><?php echo $row['gender'] ?></span>
                </div>

                <div class="grid-item">
                    <span class="form-label">Age</span>
                    <span class="form-label"><?php echo $row['age'] ?></span>
                   
                </div>

                <div class="grid-item">
                    <span class="form-label">Address</span>
                    <span class="form-label"><?php echo $row['address'] ?></span>
                   
                </div>

                <div class="grid-item">
                    <span class="form-label">Contact Number</span>
                    <span class="form-label"><?php echo $row['contact'] ?></span>
                </div>

                <div class="grid-item">
                    <span class="form-label">Birthdate</span>
                    <span class="form-label"><?php echo $row['birthdate'] ?></span>
                   
                </div>

                <div class="grid-item">
                    <span class="form-label">Birthplace</span>
                    <span class="form-label"><?php echo $row['birthplace'] ?></span>
                   
                </div>

                <div class="grid-item">
                    <span class="form-label">Nationality</span>
                    <span class="form-label"><?php echo $row['nationality'] ?></span>
                   
                </div>

                <div class="grid-item">
                    <span class="form-label">Religion</span>
                    <span class="form-label"><?php echo $row['religion'] ?></span>
                   
                </div>
            </div>

            <h3>Parents Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <span class="form-label">Father's Name</span>
                    <span class="form-label"><?php echo $row['father_name'] ?></span>
                </div>

                <div class="grid-item">
                    <span class="form-label">Father's Occupation</span>
                    <span class="form-label"><?php echo $row['father_occupation'] ?></span>
                </div>

                <div class="grid-item">
                    <span class="form-label">Father's Contact</span>
                    <span class="form-label"><?php echo $row['father_contact'] ?></span>
                </div>

                <div class="grid-item">
                    <span class="form-label">Mother's Name</span>
                    <span class="form-label"><?php echo $row['mother_name'] ?></span>
                </div>

                <div class="grid-item">
                    <span class="form-label">Mother's Occupation</span>
                    <span class="form-label"><?php echo $row['mother_occupation'] ?></span>
                </div>

                <div class="grid-item">
                    <span class="form-label">Mother's Contact</span>
                    <span class="form-label"><?php echo $row['mother_contact'] ?></span>
                </div>

                <div class="grid-item">
                    <span class="form-label">Guardian's Name</span>
                    <span class="form-label"><?php echo $row['guardian_name'] ?></span>
                   
                </div>

                <div class="grid-item">
                    <span class="form-label">Guardian's Contact</span>
                    <span class="form-label"><?php echo $row['guardian_contact'] ?></span>
                   
                </div>
            </div>

            <h3>Education Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <span class="form-label">Elementary School Name</span>
                    <span class="form-label"><?php echo $row['es_name'] ?></span>
                </div>

                <div class="grid-item">
                    <span class="form-label">Elementary School Address</span>
                    <span class="form-label"><?php echo $row['es_address'] ?></span>
                </div>

                <div class="grid-item">
                    <span class="form-label">Elementary Year Graduated</span>
                    <span class="form-label"><?php echo $row['ey_graduate'] ?></span>
                </div>

                <div class="grid-item">
                    <span class="form-label">Email</span>
                    <span class="form-label"><?php echo $row['email'] ?></span>
                </div>

                <div class="grid-item">
                    <span class="form-label">Grade Level</span>
                    <span class="form-label"><?php echo $row['grade_lvl'] ?></span>                   
                </div>

                <div class="grid-item">
                    <span class="form-label">LRN Number</span>
                    <span class="form-label"><?php echo $row['lrn'] ?></span>
                   
                </div>


            </div>
            <!-- User Information Display -->
            <?php }?>
        </form>

        <script>
        </script>
    </div>
</body>
</html>
