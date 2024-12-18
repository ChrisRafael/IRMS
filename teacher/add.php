

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
    ?>


    <div class="content">
        <a href="index.php?page=user" class=""> <i class="fa-solid fa-arrow-left"></i>  </a>
        <form class="row g-3" action="create.php" method="post">
            
            <h3>Personal Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">First Name <span class="required">*</span></label>
                    <input type="text" class="form-control" id="first_name" name="first_name"   required>
                </div>

                <div class="grid-item">
                    <label class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="namiddle_nameme" name="middle_name"  >
                </div>

                <div class="grid-item">
                    <label class="form-label">Last Name<span class="required">*</span></label>
                    <input type="text" class="form-control" id="last_name" name="last_name"  required>
                </div>

                <div class="grid-item">
                    <label class="form-label">Suffix</label>
                    <input type="text" class="form-control" id="name" name="suffix"  >
                </div>
                <div class="grid-item">
                    <label class="form-label">Gender<span class="required">*</span></label>
                    <select name="gender" class="form-control" required style="height:43px;">
                        <option hidden value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>

            <h3>Contact Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="grid-item">
                    <label class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="contact_number" name="contact_number">
                </div>
            </div>

            <h3>User Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" readonly>
                </div>
                <div class="grid-item">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password" password="password" readonly>
                    <!-- <button type="button" id="togglePassword">Show</button> -->
                </div>
            </div>

            <div class="footer">
            <button class="save" type="submit">Save</button>
            <a href="./"><button class="cancel" type="button">Cancel</button></a>
            </div>
        </form>
        <script>
            // Auto-generate username based on email
            document.getElementById('email').addEventListener('input', function() {
                const emailValue = this.value;
                document.getElementById('username').value = emailValue; // Set username as the email
            });

            // Auto-generate password based on full name (first + last name) and add 3 random digits
            document.getElementById('first_name').addEventListener('input', generatePassword);
            document.getElementById('last_name').addEventListener('input', generatePassword);

            function generatePassword() {
                const firstName = document.getElementById('first_name').value;
                const lastName = document.getElementById('last_name').value;
                if (firstName && lastName) {
                    const randomNumbers = Math.floor(100 + Math.random() * 900); // Generate 3 random digits
                    const password = firstName.toLowerCase() + lastName.toLowerCase() + randomNumbers;
                    document.getElementById('password').value = password; // Set password as first + last name + 3 random digits
                }
            }

            // Toggle password visibility
            document.getElementById('togglePassword').addEventListener('click', function() {
                const passwordField = document.getElementById('password');
                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                    this.textContent = 'Hide';
                } else {
                    passwordField.type = 'password';
                    this.textContent = 'Show';
                }
            });
        </script>

    </div>
</body>
</html>
