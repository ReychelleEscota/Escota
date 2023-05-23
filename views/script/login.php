<?php
session_start();
require "views/db/db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $pass = validate($_POST['password']);

    $sql = "SELECT * FROM users WHERE user_name='$username' AND password='$pass'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['user_name'] === $username && $row['password'] === $pass) {
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['id'] = $row['id'];
            header("Location: ./");
            exit();
        } else {
            header("Location: ./login?error=Incorect username or password");
            exit();
        }
    } else {
        header("Location: ./login?error=Incorect username or password");
        exit();
    }
} else {
    header("Location: ./login");
    exit();
}
