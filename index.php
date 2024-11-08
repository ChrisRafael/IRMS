<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="google" value="notranslate" />
    <link rel="icon" type="image/x-icon" href="file_index/image/jhslogo.png">
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
            background-color: #e9ecef;
        }

        .content {
            justify-content: center;
            width: 350px;
            background-color:#ffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        .img img {
            width: 80px;
            height: 80px;
            margin-bottom: 15px;
        }

        .description {
            color: #555;
            font-size: 2em;
            margin-bottom: 25px;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 15px;
        }

        .form-control:focus {
            outline: none;
            border-color: #4CAF50;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.4);
        }

        .error-message {
            color: red;
            font-size: 0.9em;
            margin-bottom: 15px;
            text-align: center;
        }

        .footer button {
            width: 100%;
            padding: 12px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            transition: background-color 0.3s ease;
        }

        .footer button:hover {
            background-color: #45a049;
        }

        #togglePassword {
            font-size: 0.9em;
            color: #4CAF50;
            cursor: pointer;
            background: none;
            border: none;
            margin-top: -8px;
            display: inline-block;
            text-align: right;
            margin-bottom: 15px;
        }

    </style>
</head>

<body>
    <div class="content">
        <div class="column">
        <div class="img">
            <img src="file_index/image/jhslogo.png" alt="Logo">
        </div>
        <div class="description">Enrollment Management System</div>

        </div> 
        <form action="login.php" method="post" class="login">
            <input type="text" class="form-control" name="username" placeholder="Username" required>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            <button type="button" id="togglePassword">Show</button>
            <?php if (isset($_GET['error'])): ?>
            <p class="error-message"><?php echo $_GET['error']; ?></p>
            <?php endif; ?>

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
