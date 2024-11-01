<?php 
    $page="teacher";
?>
<body>
        <div class="body-child" id="registrar" >
            <form action="" method="post">
                
                <div class="main-body">
                    <?php include('file_index/teacher_connect.php'); ?>
                    <!-- first table -->
                    <div class="body-sector">
                    <div class="info-design">
                        <img src="file_index/image/teacher-icon.jpg" alt="" srcset="" class="teacher-icon">
                    </div>
                    <div class="text-info">
                        <h4> Teacher <br> registration</h4>
                    </div>
                     <p for="" class="info-login">If you have account <a href="">login</a></p>
                    </div>
                    <!-- second table -->
                    <div class="body-sector">
                        <div class="fill-info">
                            <label for="firstname">first name</label>
                            <input type="text" name="f_name"  >
                            <p  class="error"><?php echo $f_nameErr; ?></p>
                        </div>
                        <div class="fill-info">
                            <label for="middlename" >middle name</label>
                            <input type="text" name="m_name" >
                            <p  class="error"></p>
                        </div>
                        <div class="fill-info">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="l_name" >
                            <p class="error"><?php  echo $l_nameErr; ?></p>                </div>
                        <div class="gender-box">
                            <label for="identity">gender</label>
                            <div class="gwnder-flex">
                            <label for="male">
                                <input type="radio" name="identity" > Male
                            </label>
                            <label for="female">
                                <input type="radio" name="identity" > Female
                            </label>
                        </div>
                        <p  class="error"><?php echo $identityErr; ?></p>                
                        </div>
                        <div class="fill-info">
                            <label for="username" namde="username">username</label>
                            <input type="text" name="user_name"  >
                            <p  class="error"><?php echo $user_nameErr; ?></p>                
                        </div>
                        <div class="fill-info">
                            <label for="gmail" >email</label>
                            <input type="email" name="email" >
                            <p  class="error"><?php echo $emailErr; ?></p>                
                        </div>
                        <div class="fill-info">
                            <label for="contact">contact</label>
                            <input type="text" name="number" >
                            <p  class="error"><?php echo $numberErr; ?></p>                
                        </div>
                         <div class="fill-info">
                            <label for="passwort">password</label>
                            <input type="password" name="pass" >
                            <p  class="error"><?php echo $passErr; ?></p>                
                        </div>

                        <div class="fill-info">
                            <label for="confirm_pass">confirm password</label>
                            <input type="password" name="confirm_pass" >
                            <p  class="error"><?php echo $confirm_passErr; ?></p>                
                        </div>
                        <div class="buttom-feild">
                            <input type="submit" value="submit" name="confirm" class="button-submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
