<?php

if (isset($_POST["desktop_feedback_submit"])) {
    $desktop_feedback_name = $_POST["desktop_feedback_name"];
    $desktop_feedback_email = $_POST["desktop_feedback_email"];
    $desktop_feedback_message = $_POST["desktop_feedback_message"];
    
    require('../config/connection.php');

    $stmt = $conn->prepare("INSERT INTO messages(name, email, message) VALUES(?, ?, ?)");
    $stmt->bind_param("sss", $desktop_feedback_name, $desktop_feedback_email, $desktop_feedback_message);
    $stmt->execute();
    $stmt->close();

    mysqli_close($conn);

    header("Location: ../app/home.php");
    exit();
} else if (isset($_POST["mobile_feedback_submit"])) {
    $mobile_feedback_name = $_POST["mobile_feedback_name"];
    $mobile_feedback_email = $_POST["mobile_feedback_email"];
    $mobile_feedback_message = $_POST["mobile_feedback_message"];

    require('../config/connection.php');

    $stmt = $conn->prepare("INSERT INTO messages(name, email, message) VALUES(?, ?, ?)");
    $stmt->bind_param("sss", $mobile_feedback_name, $mobile_feedback_email, $mobile_feedback_message);
    $stmt->execute();
    $stmt->close();

    mysqli_close($conn);

    header("Location: ../app/home.php");
    exit();
} else {
    header("Location: ../app/home.php");
    exit();
}

?>