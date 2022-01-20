<?php

if (isset($_POST["add_submit"])) {
    $add_name = $_POST["add_name"];
    $add_brand = $_POST["add_brand"];
    $add_gender = $_POST["add_gender"];
    $add_image = $_POST["add_image"];

    require('../config/connection.php');

    $nameExists = nameExists($conn, $add_name);

    if ($nameExists) {
        header("Location: ../app/frag-list.php?error=name_exists");
        exit();
    } else {
        $stmt = $conn->prepare("INSERT INTO fragrances(name, brand, gender, image) VALUES(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $add_name, $add_brand, $add_gender, $add_image);
        $stmt->execute();
        $stmt->close();

        mysqli_close($conn);

        header("Location: ../app/frag-list.php");
        exit();
    }
} else if (isset($_POST["remove_submit"])) {
    $remove_name = $_POST["remove_name"];

    require('../config/connection.php');

    $nameExists = nameExists($conn, $remove_name);

    if (!$nameExists) {
        header("Location: ../app/frag-list.php?error=name_doesnt_exist");
        exit();
    } else {
        $stmt = $conn->prepare("DELETE FROM fragrances WHERE name = ?");
        $stmt->bind_param("s", $remove_name);
        $stmt->execute();
        $stmt->close();

        mysqli_close($conn);

        header("Location: ../app/frag-list.php");
        exit();
    }
} else if (isset($_POST["quick_delete"])) {
    $frag_id = $_POST['frag_id'];
    
    require('../config/connection.php');

    $stmt = $conn->prepare("DELETE FROM fragrances WHERE id = ?");
    $stmt->bind_param("s", $frag_id);
    $stmt->execute();
    $stmt->close();

    mysqli_close($conn);

    header("Location: ../app/frag-list.php");
    exit();
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