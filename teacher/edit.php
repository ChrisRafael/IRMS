

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="google" value="notranslate" />
    <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
    <link rel="stylesheet" href="../style.cssassets/css/style.css">



    <title>Add Teacher</title>
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
            width: 80%;
            margin-left:auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
            border: 1px solid #ccc;
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

        .card{
            padding:4px;
            margin-left: 0;
            margin-right:0;
            width: 2rem; 
            text-align:center;
            margin-bottom:50px;
        
        
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
        $page = 'teacher';
        include '../navbar.php'; // Include this template code
        include "../database/db.php";  // Include your database connection
        $id = $_GET['id'];
        $squery =  mysqli_query($conn, "SELECT * from teacher Where id = '$id'");
        while ($row = mysqli_fetch_array($squery)) {

    ?>

    <div class="content">
        <a href="index.php?page=teacher" class=""> <i class="fa-solid fa-arrow-left"></i>  </a>
        <form class="row g-3" action="update.php?id=<?php echo $row['id']?>" method="post">
            
        <h3>Personal Information</h3>
            <div class="grid-container grid-container--fill">

                <div class="grid-item">
                    <label class="form-label">First Name <span class="required">*</span></label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $row['first_name'] ?>" required>
                </div>

                <div class="grid-item">
                    <label class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name" 
                    value = "<?php echo $row['middle_name']; ?>">
                </div>

                <div class="grid-item">
                    <label class="form-label">Last Name<span class="required">*</span></label>
                    <input type="text" class="form-control" id="last_name" name="last_name" 
                    value = "<?php echo $row['last_name']; ?>" required>
                </div>

                <div class="grid-item">
                    <label class="form-label">Suffix</label>
                    <input type="text" class="form-control" id="name" name="suffix" 
                    value = "<?php echo $row['suffix']; ?>"  >
                </div>

                <div class="grid-item">
                    <label class="form-label">Gender<span class="required">*</span></label>
                    <select name="gender" class="form-control" required style="height:43px;">
                        <option hidden value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>

            <h3>Contact Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" required
                    value = "<?php echo $row['email']; ?>">
                </div>
                <div class="grid-item">
                    <label class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="contact_number" name="contact_number" required
                    value = "<?php echo $row['contact']; ?>">
                </div>
            </div>

            <h3>User Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username"
                    value = "<?php echo $row['username']; ?>">
                </div>
                <div class="grid-item">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password" password="password" 
                    value = "<?php echo $row['password']; ?>">
                    <!-- <button type="button" id="togglePassword">Show</button> -->
                </div>
            </div>
            <?php }?>

            <div class="footer">
            <button class="save" type="submit">Update</button>
            <a href="delete.php?id=<?php echo $row['id']; ?> " ><button class="cancel" type="button">Delete</button></a>
            </div>

        </form>


    </div>
</body>
</html>
