<?php

if (isset($_POST["submit"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repeat_password = $_POST["repeat_password"];

    require('../config/connection.php');
    
    $u_s = "SELECT * FROM users WHERE username = '$username'";
    $username_result = mysqli_query($conn, $u_s);
    $username_num = mysqli_num_rows($username_result);

    if ($username_num === 1) {
        header("Location: ../app/register.php?error=username_exists");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../app/register.php?error=invalid_email");
        exit();
    }

    if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password)) {
        header("Location: ../app/register.php?error=invalid_password");
        exit();
    }

    if ($password != $repeat_password) {
        header("Location: ../app/register.php?error=invalid_repeat_password");
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO users(first_name, last_email, username, email, password) VALUES(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $username, $email, $password);
    $stmt->execute();
    $stmt->close();

    header("Location: ../app/home.php");
    exit();
} else {
    header("Location: ../app/home.php");
    exit();
}

?>