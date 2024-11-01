

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
    
    ?>
<?php
        $page = 'student';
        include '../navbar.php'; // Include this template code
        include '../database/db.php';
    ?>
    <div class="content">
        <div class="header">
            <h1>Enrollment Form </h1>
        </div>

        <form class="row g-3" action="../student/create.php" method="post">
            <div class=""><i class="fa-solid fa-arrow-left"></i></div>
            <div class="image" id="image">
                <img src="../../assets/img/default.jpeg" alt="">
                <input type="text" hidden name="imageValue" value="default.jpeg">
            </div>

            <h3>Personal Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">First Name <span class="required">*</span></label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                    <p class="error-message"></p>
                </div>

                <div class="grid-item">
                    <label class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="middleName" name="middle_name">
                    <p class="error-message"></p>
                </div>

                <div class="grid-item">
                    <label class="form-label">Last Name<span class="required">*</span></label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                    <p class="error-message"></p>
                </div>

                <div class="grid-item">
                    <label class="form-label">Suffix</label>
                    <input type="text" class="form-control" id="suffix" name="suffix">
                </div>

                <div class="grid-item">
                    <label class="form-label">Gender<span class="required">*</span></label>
                    <select name="gender" class="form-control" required style="height:43px;">
                        <option value="" >Select Gender</option>
                        <option value="Male" name="gender">Male </option>
                        <option value="Female" name="gender">Female</option>
                    </select>
                    <p class="error-message"></p>
                </div>

                <div class="grid-item">
                    <label class="form-label">Age<span class="required">*</span></label>
                    <input type="number" class="form-control" name="age" required>
                    <p class="error-message"></p>
                </div>

                <div class="grid-item">
                    <label class="form-label">Address<span class="required">*</span></label>
                    <input type="text" class="form-control" name="address" required>
                    <p class="error-message"></p>
                </div>

                <div class="grid-item">
                    <label class="form-label">Contact Number<span class="required">*</span></label>
                    <input type="text" class="form-control" name="contact_number" required>
                    <p class="error-message"></p>
                </div>

                <div class="grid-item">
                    <label class="form-label">Birthdate<span class="required">*</span></label>
                    <input type="date" class="form-control" name="birthdate" required>
                    <p class="error-message"></p>
                </div>

                <div class="grid-item">
                    <label class="form-label">Birthplace<span class="required">*</span></label>
                    <input type="text" class="form-control" name="birthplace" required>
                    <p class="error-message"></p>
                </div>

                <div class="grid-item">
                    <label class="form-label">Nationality<span class="required">*</span></label>
                    <input type="text" class="form-control" name="nationality" required>
                    <p class="error-message"></p>
                </div>

                <div class="grid-item">
                    <label class="form-label">Religion<span class="required">*</span></label>
                    <input type="text" class="form-control" name="religion" required>
                    <p class="error-message"></p>
                </div>
            </div>

            <h3>Parents Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">Father's Name</label>
                    <input type="text" class="form-control" name="father_name">
                </div>

                <div class="grid-item">
                    <label class="form-label">Father's Occupation</label>
                    <input type="text" class="form-control" name="father_occupation">
                </div>

                <div class="grid-item">
                    <label class="form-label">Father's Contact</label>
                    <input type="text" class="form-control" name="father_contact">
                </div>

                <div class="grid-item">
                    <label class="form-label">Mother's Name</label>
                    <input type="text" class="form-control" name="mother_name">
                </div>

                <div class="grid-item">
                    <label class="form-label">Mother's Occupation</label>
                    <input type="text" class="form-control" name="mother_occupation">
                </div>

                <div class="grid-item">
                    <label class="form-label">Mother's Contact</label>
                    <input type="text" class="form-control" name="mother_contact">
                </div>

                <div class="grid-item">
                    <label class="form-label">Guardian's Name</label>
                    <input type="text" class="form-control" name="guardian_name" required>
                    <p class="error-message"></p>
                </div>

                <div class="grid-item">
                    <label class="form-label">Guardian's Contact</label>
                    <input type="text" class="form-control" name="guardian_contact" required>
                    <p class="error-message"></p>
                </div>
            </div>

            <h3>Education Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">Elementary School Name</label>
                    <input type="text" class="form-control" name="elementary_name">
                </div>

                <div class="grid-item">
                    <label class="form-label">Elementary School Address</label>
                    <input type="text" class="form-control" name="elementary_address">
                </div>

                <div class="grid-item">
                    <label class="form-label">Elementary Year Graduated</label>
                    <input type="text" class="form-control" name="elementary_year">
                </div>

                <div class="grid-item">
                    <label class="form-label">Email<span class="required">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" >
                </div>

                <div class="grid-item">
                    
                    <label class="form-label">Grade Level</label>
                    <select name="grade_level" class="form-control" required style="height:43px;">
                            <option hidden value="" hidden>Select Grade Level</option> 
                            <option value="7">Grade 7</option>
                            <option value="8">Grade 8</option>
                            <option value="9">Grade 9</option>
                            <option value="10">Grade 10</option>
                    </select>
                    <p class="error-message"></p>
                </div>

                <div class="grid-item">
                    <label class="form-label">LRN Number<span class="required">*</span></label>
                    <input type="text" class="form-control" name="lrn_number" required>
                    <p class="error-message"></p>
                </div>


            </div>

            <!-- User Information Display -->

            <div class="footer">
                <button class="save">Save</button>
                <a href="./"><button class="cancel" type="button">Cancel</button></a>
            </div>
        </form>
        <?php 
        ?>          
        <script>
        </script>
    </div>
</body>
</html>
