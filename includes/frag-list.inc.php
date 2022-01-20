<?php

if (isset($_POST["add_submit"])) {
    $add_name = $_POST["add_name"];
    $add_brand = $_POST["add_brand"];
    $add_gender = $_POST["add_gender"];
    $add_image = $_POST["add_image"];
    
    require('../config/connection.php');

    mysqli_select_db($conn, "fragrances");
    
    $nameExists = nameExists($conn, $add_name);

    if ($nameExists) {
        header("Location: ../app/frag-list.php?error=name_exists");
        exit();
    } else {
        $queryAdd = "INSERT INTO fragrances (name, brand, gender, image)
         VALUES ('$add_name', '$add_brand', '$add_gender', '$add_image')";

        mysqli_query($conn, $queryAdd);
        mysqli_close($conn);

        header("Location: ../app/frag-list.php");
        exit();
    }
} else if (isset($_POST["remove_submit"])) {
    $remove_name = $_POST["remove_name"];

    require('../config/connection.php');

    mysqli_select_db($conn, "fragrances");

    $nameExists = nameExists($conn, $remove_name);

    if (!$nameExists) {
        header("Location: ../app/frag-list.php?error=name_doesnt_exist");
        exit();
    } else {
        $queryRemove = "DELETE FROM fragrances WHERE name = '$remove_name'";

        mysqli_query($conn, $queryRemove);
        mysqli_close($conn);

        header("Location: ../app/frag-list.php");
        exit();
    }
} else {
    header("Location: ../app/home.php");
    exit();
}

function nameExists($conn, $name) {
    $records = $conn->query("SELECT * FROM fragrances WHERE name = '$name'");

    $data = $records->fetch_assoc();
    
    if ($data) {
        $result = true;
        return $result;
    } else {
        $result = false;
        return $result;
    }

    $conn->close();
}

?>