<?php
require "views/db/db_conn.php";

if (isset($_POST['register-submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $repeatPwd = $_POST['confirm-password'];

    $sql = "SELECT * FROM users WHERE user_name='$username' OR user_email='$email'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: ./login?error=The username or email is taken, try another");
    } else {
        if ($pass === $repeatPwd) {
            $sql = "INSERT INTO users (user_name, user_email, password) VALUES ('$username', '$email', '$pass')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: ./login?success=Your account has been created successfully");
            } else {
                header("Location: ./login?error=Unknown error occurred");
            }
        } else {
            header("Location: ./login?error=The passwords do not match");
        }
    }
} else {
    header("Location: ./login");
    exit();
}
