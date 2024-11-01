

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
            width: 100%;
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

        #togglePassword{
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

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .content {
                width: 95%;
            }
        }

</style>
<body>
    <?php 
    $page = 'teacher_add';
   
    ?>
    <div class="content">

        <form class="row g-3" action="create.php" method="post">

            <h3>Teacher Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">First Name:</label>
                    <input type="text" class="form-control" id="username" name="username" >
                </div>
                <div class="grid-item">
                    <label class="form-label">Middle Name:</label>
                    <input type="text" class="form-control" id="username" name="username" >
                </div>
            </div>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">Last Name:</label>
                    <input type="text" class="form-control" id="username" name="username" >
                </div>
                <div class="grid-item">
                    <label class="form-label">Suffex:</label>
                    <input type="text" class="form-control" id="username" name="username" >
                </div>
            </div>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" >
                </div>
                <div class="grid-item">
                    <label class="form-label">Password:</label>
                    <input type="text" class="form-control" id="password" name="password" password="password" >
                    <button type="button" id="togglePassword">Show</button>
                </div>
            </div>

            <div class="footer">
                <button class="save" type="submit">Save</button>
                <a href="./"><button class="cancel" type="button">Cancel</button></a>
            </div>
        </form>

    </div>
    <script>
        //show password
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
</body>
</html>
