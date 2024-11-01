<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="google" value="notranslate" />
    <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login Page</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .content {
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .form-control:focus {
            outline: none;
            border-color: #4CAF50;
        }

        .footer button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
        }

        .footer button:hover {
            background-color: #45a049;
        }

        #togglePassword {
            font-size: 12px;
            color: #4CAF50;
            cursor: pointer;
            background: none;
            border: none;
            padding: 0;
            margin-top: -8px;
            margin-left: auto;
            display: block;
            text-align: right;
        }
    </style>
</head>



<body>
    <div class="content">
        <h3>Login</h3>




        <form class="row g-3" action="login.php" method="post">
            <?php
            ?>
            <label>Username:</label>
            <input type="text" class="form-control" name="username" required>

            <label>Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <button type="button" id="togglePassword">Show</button>

            <div class="footer">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>

    <script>
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
</body>
</html>
