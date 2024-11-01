<?php
session_start();
include "database/db.php";

echo $_POST['username'] . $_POST['password'];

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: index.php?error=Username is required.");
        exit();
    } else if (empty($password)) {
        header("Location: index.php?error=Password is required.");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE username ='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                $_SESSION['username '] = $row['username '];
                $_SESSION['id'] = $row['id'];
                header("Location: dashboard/index.php");
                exit();
            }
            else{
                header("Location: index.php?error=Incorrect username or password.");
            exit();
            }
        } else {
            header("Location: index.php?error=Incorrect username or password.");
            exit();
        }
    }
}