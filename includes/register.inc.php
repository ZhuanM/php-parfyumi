<?php

require('../config/connection.php');

mysqli_select_db($conn, "users");

$username = $_POST["username"];
$password = $_POST["password"];

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];

$s = "SELECT * FROM users WHERE username = '$username'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Username already taken!";
} else {
    $reg = "INSERT INTO users(first_name, last_name, username, password) VALUES('$first_name', '$last_name', '$username', '$password')";
    mysqli_query($conn, $reg);

    mysqli_close($conn);
    header("Location: ../app/index.php");
}

?>