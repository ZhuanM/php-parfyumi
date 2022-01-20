<?php

session_start();

require('../config/connection.php');

$query = "SELECT * FROM messages";

$messages = $conn->query($query);

?>

<style>
<?php require "../styles/messages.css"?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="../assets/images/icons/favicon.png">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/3934c42899.js" crossorigin="anonymous"></script>
    <!-- GLOBAL CSS -->
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    <!-- CUSTOM FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Petit+Formal+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pattaya&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <!-- TITLE -->
    <title>Parfyumi</title>
</head>

<body>
    <?php require 'navigation.php'?>

    <div class="entirety drag-to-navbar">
        <div class="container main-padding">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="header-wrapper text-center">
                        <div class="header-text">
                            Обратна връзка:
                        </div>
                        <hr class="header-divider">
                        <div class="messages">
                            <?php
                                while ($message = mysqli_fetch_assoc($messages)) :
                            ?>
                                <div class="row justify-content-center">
                                    <div class="col col-md-10">
                                        <div class="feedback-wrapper font-comfortaa">
                                            <div class="mt-1">
                                                <span class="feedback-name">Изпратено от:</span> <?= $message["name"] ?>
                                            </div>
                                            <hr class='custom-divider my-1'>
                                            <div>
                                                <span class="feedback-email">Имейл:</span> <?= $message["email"] ?>
                                            </div>
                                            <hr class='custom-divider my-1'>
                                            <div class="mb-3">
                                                <span class="feedback-message">Съобщение:</span> <?= $message["message"] ?>
                                            </div>
                                            <form action="../includes/messages.inc.php" method="post">
                                                <div class="feedback-delete pointer mb-2">
                                                    <div class='row justify-content-center'>
                                                        <input type="hidden" name='message_id' value='<?=$message['id']?>'>
                                                        <button type='submit' name='delete_submit' class='btn btn-primary remove-button no-border-color font-comfortaa w-50'>Изтриване</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                endwhile;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'footer.php'?>
</body>

</html>