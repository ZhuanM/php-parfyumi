<?php

if (isset($_POST["desktop_feedback_submit"])) {
    $desktop_feedback_name = $_POST["desktop_feedback_name"];
    $desktop_feedback_email = $_POST["desktop_feedback_email"];
    $desktop_feedback_message = $_POST["desktop_feedback_message"];
    
    require('../config/connection.php');

    mysqli_select_db($conn, "messages");
    
    $queryFeedbackDesktop = "INSERT INTO messages (name, email, message)
     VALUES ('$desktop_feedback_name', '$desktop_feedback_email', '$desktop_feedback_message')";

    mysqli_query($conn, $queryFeedbackDesktop);
    mysqli_close($conn);

    header("Location: ../app/home.php");
    exit();
} else if (isset($_POST["mobile_feedback_submit"])) {
    $mobile_feedback_name = $_POST["mobile_feedback_name"];
    $mobile_feedback_email = $_POST["mobile_feedback_email"];
    $mobile_feedback_message = $_POST["mobile_feedback_message"];

    require('../config/connection.php');

    mysqli_select_db($conn, "messages");

    $queryFeedbackMobile = "INSERT INTO messages (name, email, message)
        VALUES ('$mobile_feedback_name', '$mobile_feedback_email', '$mobile_feedback_message')";

    mysqli_query($conn, $queryFeedbackMobile);
    mysqli_close($conn);

    header("Location: ../app/home.php");
    exit();
} else {
    header("Location: ../app/home.php");
    exit();
}

?>