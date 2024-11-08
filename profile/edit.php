

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="google" value="notranslate" />
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo.png">
    <link rel="stylesheet" href="assets/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">    
    <script src="[YOUR_KIT_CODE]" crossorigin="anonymous"></script>


    <title>IRMS-Teacher</title>
</head>

<style>
            /* General Styles */
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .content {
            margin-left:auto;
            width: 80%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Header Styles */
        .header {
            background-color:  #550000;
            padding: 20px;
            color: white;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }

        /* Grid Layout for the form */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 20px;
            padding: 20px 0;
        }

        .grid-item {
            display: flex;
            flex-direction: column;
        }

        /* Form Labels */
        label.form-label {
            font-weight: bold;
            margin-bottom: 8px;
        }

        /* Form Inputs */
        .form-control {
            padding: 10px;
            border:none;
            border-bottom:1px solid black;
            border-radius: 4px;
            font-size: 14px;
        }

        .form-control:focus {
            outline: none;
            border-color: #4CAF50;
        }

        /* Button Styles */
        .footer {
            text-align: right;
            margin-top: 20px;
        }

        .footer button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .save {
            background-color: #4CAF50;
            color: white;
        }

        .save:hover {
            background-color: #45a049;
        }

        .cancel {
            background-color: #f44336;
            color: white;
        }

        .cancel:hover {
            background-color: #e53935;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .content {
                width: 95%;
            }
        }

</style>
<body>
<?php
        $page = 'profile';
        include '../navbar.php';
        include '../database/db.php'; // Include the database connection file

        $id = $_GET['id'];
    

        // Check if connection is established
            $squery = mysqli_query($conn, "SELECT * FROM student WHERE id = '$id'");
           while ($row = mysqli_fetch_array ($squery)) {
            # code...
    
    ?>
    <div class="content">
        <div class="header">
            <h1>Profile <?php //if ($page) {echo $page;} ?></h1>
        </div>

        <form class="row g-3" action="../profile/update.php?id=<?php echo $row['id']?>" method="post">

            <h3>Personal Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">First Name <span class="required">*</span></label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo ($row['firstname']); ?>" required>
                </div>

                <div class="grid-item">
                    <label class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="middleName" name="middle_name" value="<?php echo ($row['middlename']); ?>">
                </div>

                <div class="grid-item">
                    <label class="form-label">Last Name<span class="required">*</span></label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo ($row['lastname']); ?>" required>
                </div>

                <div class="grid-item">
                    <label class="form-label">Suffix</label>
                    <input type="text" class="form-control" id="suffix" name="suffix" value="<?php echo ($row['suffix']); ?>">
                </div>

                <div class="grid-item">
                    <label class="form-label">Gender<span class="required">*</span></label>
                    <select name="gender" class="form-control" required  style="height:43px;">
                        <option value="">Select Gender</option>
                        <option  value="male" <?php echo $row['gender'] == 'male' ? 'selected' : ''; ?> name="gender">Male</option>
                        <option  value="female" <?php echo $row['gender'] == 'female' ? 'selected' : ''; ?> name="gender">Female</option>
                    </select>
                </div>

                <div class="grid-item">
                    <label class="form-label">Age<span class="required">*</span></label>
                    <input type="number" class="form-control" name="age" value="<?php echo ($row['age']); ?>" required>
                </div>

                <div class="grid-item">
                    <label class="form-label">Address<span class="required">*</span></label>
                    <input type="text" class="form-control" name="address" value="<?php echo ($row['address']); ?>" required>
                </div>

                <div class="grid-item">
                    <label class="form-label">Contact Number<span class="required">*</span></label>
                    <input type="text" class="form-control" name="contact_number" value="<?php echo ($row['contact']); ?>" required>
                </div>

                <div class="grid-item">
                    <label class="form-label">Birthdate<span class="required">*</span></label>
                    <input type="date" class="form-control" name="birthdate" value="<?php echo ($row['birthdate']); ?>" required>
                </div>

                <div class="grid-item">
                    <label class="form-label">Birthplace<span class="required">*</span></label>
                    <input type="text" class="form-control" name="birthplace" value="<?php echo ($row['birthplace']); ?>" required>
                </div>

                <div class="grid-item">
                    <label class="form-label">Nationality<span class="required">*</span></label>
                    <input type="text" class="form-control" name="nationality" value="<?php echo ($row['nationality']); ?>" required>
                </div>

                <div class="grid-item">
                    <label class="form-label">Religion<span class="required">*</span></label>
                    <input type="text" class="form-control" name="religion" value="<?php echo ($row['religion']); ?>" required>
                </div>
            </div>

            <h3>Parents Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">Father's Name</label>
                    <input type="text" class="form-control" name="father_name" value="<?php echo ($row['father_name']); ?>">
                </div>

                <div class="grid-item">
                    <label class="form-label">Father's Occupation</label>
                    <input type="text" class="form-control" name="father_occupation" value="<?php echo ($row['father_occupation']); ?>">
                </div>

                <div class="grid-item">
                    <label class="form-label">Father's Contact</label>
                    <input type="text" class="form-control" name="father_contact" value="<?php echo ($row['father_contact']); ?>">
                </div>

                <div class="grid-item">
                    <label class="form-label">Mother's Name</label>
                    <input type="text" class="form-control" name="mother_name" value="<?php echo ($row['mother_name']); ?>">
                </div>

                <div class="grid-item">
                    <label class="form-label">Mother's Occupation</label>
                    <input type="text" class="form-control" name="mother_occupation" value="<?php echo ($row['mother_occupation']); ?>">
                </div>

                <div class="grid-item">
                    <label class="form-label">Mother's Contact</label>
                    <input type="text" class="form-control" name="mother_contact" value="<?php echo ($row['mother_contact']); ?>">
                </div>

                <div class="grid-item">
                    <label class="form-label">Guardian's Name</label>
                    <input type="text" class="form-control" name="guardian_name" value="<?php echo ($row['guardian_name']); ?>" required>
                </div>

                <div class="grid-item">
                    <label class="form-label">Guardian's Contact</label>
                    <input type="text" class="form-control" name="guardian_contact" value="<?php echo ($row['guardian_contact']); ?>" required>
                </div>
            </div>

            <h3>Education Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">Elementary School Name</label>
                    <input type="text" class="form-control" name="elementary_name" value="<?php echo ($row['es_name']); ?>">
                </div>

                <div class="grid-item">
                    <label class="form-label">Elementary School Address</label>
                    <input type="text" class="form-control" name="elementary_address" value="<?php echo ($row['es_address']); ?>">
                </div>

                <div class="grid-item">
                    <label class="form-label">Elementary Year Graduated</label>
                    <input type="text" class="form-control" name="elementary_year" value="<?php echo ($row['ey_graduate']); ?>">
                </div>

                <div class="grid-item">
                    <label class="form-label">Email<span class="required">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo ($row['email']); ?>" required>
                </div>

                <div class="grid-item">
                    <label class="form-label">Grade Level</label>
                    <select name="grade_level" class="form-control" value="" required style="height:43px;">
                            <option hidden value="<?php echo ($row['grade_lvl']); ?>" hidden><?php echo ($row['grade_lvl']); ?></option> 
                            <option value="7">Grade 7</option>
                            <option value="8">Grade 8</option>
                            <option value="9">Grade 9</option>
                            <option value="10">Grade 10</option>
                    </select>
                </div>

                <div class="grid-item">
                    <label class="form-label">LRN Number<span class="required">*</span></label>
                    <input type="text" class="form-control" name="lrn_number" value="<?php echo ($row['lrn']); ?>" required>
                </div>


            </div>
            <?php } ?>


            <!-- User Information Display -->

            <div class="footer">
                <button class="save" type="submit">Save</button>
                <a href="./"><button class="cancel" type="button">Cancel</button></a>
            </div>
        </form>

        <script>
        </script>
    </div>
</body>
</html>
