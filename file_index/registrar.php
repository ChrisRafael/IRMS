<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrar</title>
</head>
<body>
<?php 
    $page="registar";
    include('file_index/registrar-connect.php'); 
?>

<div class="body-child" id="teacher" >
            <form action="" method="post">
                <div class="main-body">
                    <!-- first table -->
                    <div class="body-sector">
                    <div class="info-design">
                        <img src="file_index/image/registrar-logo.png" alt="" srcset="" class="teacher-icon">
                    </div>
                    <div class="text-info">
                        <h4>Registrar <br> registration</h4>
                    </div>
                     <p for="" class="info-login">If you have account <a href="">login</a></p>
                    </div>
                    <!-- second table -->
                    <div class="body-sector">
                        <div class="fill-info">
                            <label for="first_name">first name</label>
                            <input type="text" name="first_name"  value="<?php echo $first_name; ?>" >
                            <p  class="error"><?php echo $first_nameErr ; ?></p>
                        </div>
                        <div class="fill-info">
                            <label for="middle_name" >middle name</label>
                            <input type="text" name="middle_name" >
                            <p  class="error"></p>
                        </div>
                        <div class="fill-info">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" >
                            <p class="error"><?php echo $last_nameErr; ?></p>               
                        </div>
                        <div class="gender-box">
                            <label for="gender">gender</label>
                            <div class="gwnder-flex">
                            <label for="male">
                                <input type="radio" name="gender" > Male
                            </label>
                            <label for="female">
                                <input type="radio" name="gender" > Female
                            </label>
                        </div>
                        <p  class="error"><?php echo $genderErr; ?></p>                
                        </div>
                        <div class="fill-info">
                            <label for="username" namde="username">username</label>
                            <input type="text" name="username"  >
                            <p  class="error"><?php echo $usernameErr; ?></p>                
                        </div>
                        <div class="fill-info">
                            <label for="gmail" >email</label>
                            <input type="email" name="gmail" >
                            <p  class="error"><?php echo $gmailErr; ?></p>                
                        </div>
                        <div class="fill-info">
                            <label for="contact">contact</label>
                            <input type="text" name="contact" value="<?php echo $contact; ?>">
                            <p  class="error"><?php echo $contactErr; ?></p>                
                        </div>
                         <div class="fill-info">
                            <label for="passwort">password</label>
                            <input type="password" name="password" value="<?php echo $password; ?>">
                            <p  class="error"><?php echo $passwordErr; ?></p>                
                        </div>

                        <div class="fill-info">
                            <label for="confirm_pass">confirm password</label>
                            <input type="password" name="confirm_password" value="<?php echo $confirm_pass; ?>">
                            <p  class="error"><?php echo  $confirm_passErr; ?></p>                
                        </div>
                        <div class="buttom-feild">
                            <input type="submit" value="submit" name="submit" class="button-submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>