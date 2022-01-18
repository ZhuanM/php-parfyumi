<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    require('../config/connection.php');
    
    $userExists = userExists($conn, $username);

    if ($userExists === false || $password !== $userExists["password"]) {
        header("Location: ../app/login.php?error=credentials");
        exit();
    } else {
        session_start();
        $_SESSION["username"] = $userExists["username"];
        $_SESSION["first_name"] = $userExists["first_name"];

        if ($_SESSION["username"] === "admin") {
            $_SESSION["isAdmin"] = true;
        } else {
            $_SESSION["isAdmin"] = false;
        }
        
        header("Location: ../app/home.php");
        exit();
    }
} else {
    header("Location: ../app/login.php");
    exit();
}

function userExists($conn, $username) {
    $records = $conn->query("SELECT * FROM users WHERE username = '$username'");

    $data = $records->fetch_assoc();
    
    if ($data) {
        $result = $data;
        return $result;
    } else {
        $result = false;
        return $result;
    }

    $conn->close();
}

?>