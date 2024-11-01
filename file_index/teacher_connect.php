<?php 

        //define the variable of error message 
        $f_nameErr= $l_nameErr= $identityErr= $user_nameErr= $emailErr= $numberErr= $passErr= $confirm_passErr="";
        $f_name= $m_name= $l_name= $identity= $user_name= $email= $number= $pass= $confirm_pass="";
        $is_valid = true;  // Track form validity
        // Validate and insert data
        if (isset($_POST['confirm'])) {
            // Validation for first name
            if (empty($_POST["f_name"])) {
                $f_nameErr = "First Name Required";
                $is_valid = false;
            } else {
                $f_name = test_input($_POST["f_name"]);
            }
        
            // Validate middle name (optional)
            if (empty($_POST["m_name"])) {
                $m_name = "";
            } else {
                $m_name = test_input($_POST["m_name"]); 
            }
        
            if (empty($_POST["l_name"])) {
                $l_nameErr = "Last Name Required";
                $is_valid = false;
            } else {
                $l_name = test_input($_POST["l_name"]);
            }
        
            if (empty($_POST["identity"])) {
                $identityErr = "Gender Required";
                $is_valid = false;
            } else {
                $identity = test_input($_POST["identity"]);
            }
        
            if (empty($_POST["user_name"])) {
                $user_nameErr = "Username Required";
                $is_valid = false;
            } else {
                $user_name = test_input($_POST["user_name"]);
            }
        
            if (empty($_POST["email"])) {
                $emailErr = "Email Required";
                $is_valid = false;
            } else {
                $email = test_input($_POST["email"]);
            }
        
            if (empty($_POST["number"])) {
                $numberErr = "Contact Required";
                $is_valid = false;
            } else {
                $number = test_input($_POST["number"]);
            }
        
            if (empty($_POST["pass"])) {
                $passErr = "Password Required";
                $is_valid = false;
            } else {
                $pass = test_input($_POST["pass"]);
            }
        
            if (empty($_POST["confirm_pass"])) {
                $confirm_passErr = "Confirm password Required";
                $is_valid = false;
            } else if ($_POST["confirm_pass"] != $_POST["pass"]) {
                $confirm_passErr = "Passsword do not match";
                $is_valid = false;
            } else {
                $confirm_pass = test_input($_POST["confirm_pass"]);
            }
        
            // If form is valid, proceed with database insertion
            if ($is_valid) {
                // Insert data into database

                $mysql = "INSERT INTO `teacherdb`(`teacher_id`, `f_name`, `m_name`, `l_name`, `identity`, `user_name`, `email`, `contact_n`, `pass`) VALUES 
                                                (not null,'$f_name','$m_name','$l_name','$identity','$user_name','$email','$number','$pass')";
                $result = mysqli_query($conn, $mysql);

                if ($result) {
                    echo""; //connect to teacher dashboard
                } else {
                    echo 'Error: ' . mysqli_error($conn);
                }
            } else {
                echo ''; //back to registration form
            }
        }


?>
