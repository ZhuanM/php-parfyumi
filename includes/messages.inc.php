<?php

// var_dump($_SESSION["message_id"]);
// exit();

if (isset($_POST["delete_submit"])) {
    $message_id = $_POST['message_id'];
    
    require('../config/connection.php');

    mysqli_select_db($conn, "messages");
    
    $queryRemove = "DELETE FROM messages WHERE id = '$message_id'";

    mysqli_query($conn, $queryRemove);
    mysqli_close($conn);

    header("Location: ../app/messages.php");
    exit();
} else {
    header("Location: ../app/home.php");
    exit();
}

?>