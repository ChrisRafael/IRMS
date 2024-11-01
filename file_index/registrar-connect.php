<?php 

    //define the variable of error message 
    $first_nameErr= $last_nameErr= $genderErr= $usernameErr= $gmailErr= $contactErr= $passwordErr= $confirm_passErr="";
    $first_name= $middle_name= $last_name= $gender= $username= $gmail= $contact= $password= $confirm_pass="";
    $is_valid = true;  // Track form validity
    // Validate and insert data
    if (isset($_POST['submit'])) {
        // Validation for first name
        if (empty($_POST["first_name"])) {
            $first_nameErr = "First Name Required";
            $is_valid = false;
        } else {
            $first_name = test_input($_POST["first_name"]);
        }
    
        // Validate middle name (optional)
        if (empty($_POST["middle_name"])) {
            $middle_name = "";
        } else {
            $middle_name = test_input($_POST["middle_name"]); 
        }

        if (empty($_POST["last_name"])) {
            $last_nameErr = "Last Name Required";
            $is_valid = false;
        } else {
            $last_name = test_input($_POST["last_name"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender Required";
            $is_valid = false;
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["username"])) {
            $usernameErr = "Username Required";
            $is_valid = false;
        } else {
            $username = test_input($_POST["username"]);
        }

        if (empty($_POST["gmail"])) {
            $gmailErr = "Email Required";
            $is_valid = false;
        } else {
            $gmail = test_input($_POST["gmail"]);
        }

        if (empty($_POST["contact"])) {
            $contactErr = "Contact Required";
            $is_valid = false;
        } else {
            $contact = test_input($_POST["contact"]);
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password Required";
            $is_valid = false;
        } else {
            $password = test_input($_POST["password"]);
        }

        if (empty($_POST["confirm_password"])) {
            $confirm_passErr = "Confirm Password Required";
            $is_valid = false;
        } else if ($_POST["confirm_password"] != $_POST["password"]) {
            $confirm_passErr = "Passwords do not match";
            $is_valid = false;
        } else {
            $confirm_pass = test_input($_POST["confirm_password"]);
        }

        // If form is valid, proceed with database insertion
        if ($is_valid) {
            // Insert data into database
            
            $sql = "INSERT INTO `user`(`user_id`, `firstname`, `middlename`, `lastname`, `gender`, `username`, `gmail`, `contact`, `password`) VALUES 
                        (NULL, '$first_name', '$middle_name', '$last_name', '$gender', '$username', '$gmail', '$contact', '$password')";
            
            $result = mysqli_query($conn, $sql);
            
            if ($result) {
                echo '';
            } else {
                echo 'Error: ' . mysqli_error($conn);
            }
        } else {
            echo '';
        }
    }

    // Helper function to sanitize user input
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>