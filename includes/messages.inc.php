<?php

if (isset($_POST["delete_submit"])) {
    $message_id = $_POST['message_id'];
    
    require('../config/connection.php');

    $stmt = $conn->prepare("DELETE FROM messages WHERE id = ?");
    $stmt->bind_param("s", $message_id);
    $stmt->execute();
    $stmt->close();

    mysqli_close($conn);

    header("Location: ../app/messages.php");
    exit();
} else {
    header("Location: ../app/home.php");
    exit();
}

?>