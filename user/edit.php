<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="google" value="notranslate" />
    <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
    <title>User Account</title>
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

    #togglePassword {
        border-radius:12px;
        margin-top:10px;
        color:white;
        width: 100px;
        height:20px;
        display:block;
        margin-right:4px;
        margin-left:auto;
        background-color:#550000;
    }

    .card{
            padding:4px;
            margin-left: 0;
            margin-right:0;
            width: 2rem; 
            text-align:center;
            margin-bottom:50px;
        
        
        }

        .card a{
            text-decoration:none;
            color:black;
        }
        .card i {
            margin-left: 0;
            font-size: 30px; /* Adjust the size as needed */
            display: block; /* Ensures icons are centered within the card */
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
        $page = 'user';
        include '../navbar.php';
        include '../database/db.php'; // Include the database connection file

        $id = $_GET['id'];
    

        // Check if connection is established
            $squery = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");
           while ($row = mysqli_fetch_array ($squery)) {
            # code...
    
    ?>

    <div class="content">
        <div class="card">
        <a href="index.php?page=user" class=""><i class="fa-regular fa-circle-left"></i> </a>
        </div>
        <form class="row g-3" action="../user/update.php?id=<?php echo $row['id']?>" method="post">
            <h3>User Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo ($row['name']); ?>" required>
                </div>
                <div class="grid-item">
                    <label class="form-label">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo ($row['username']); ?>" required>
                </div>
            </div>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">Suffix:</label>
                    <input type="text" class="form-control" id="role" name="role" value="<?php echo ($row['role']); ?>" >
                </div>
                <div class="grid-item">
                    <label class="form-label">Password:</label>
                    <input type="text" class="form-control" id="password" name="password" value="<?php echo ($row['password']); ?>" required>
                </div>
            </div>

            <div class="footer">
                <button class="save" type="submit">Update</button>
                <a href="delete.php?id=<?php echo $row['id']; ?> " ><button class="cancel" type="button">Delete</button></a>
            </div>
        </form>
        <?php } ?>
    </div>
</body>
</html>
