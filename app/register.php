<style>
<?php require "../styles/register.css"?>
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
    <!-- TITLE -->
    <title>Parfyumi</title>
</head>

<body>
    <?php require "../app/navigation.php" ?>

    <div class="main-screen drag-to-navbar entire-screen">
        <div class="entire-screen d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="form-card p-3">
                            <form class="m-0" action="../includes/register.inc.php" method="post" autocomplete="off">
                                <div class="form-group">
                                    <label class="font-comfortaa">Първо име</label>
                                    <input type="text" name="first_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-comfortaa">Последно име</label>
                                    <input type="text" name="last_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-comfortaa">Потребителско име</label>
                                    <input type="text" name="username" class="form-control" required>
                                    <?php
                                        if (isset($_GET['error']) && $_GET["error"] === "username_exists") {
                                            echo "<div class='error-message'> Потребителското име вече съществува! </div>";
                                        }
                                    ?>
                                </div>
                                <div class="error-message">
                                </div>
                                <div class="form-group">
                                    <label class="font-comfortaa">Имейл</label>
                                    <input type="text" name="email" class="form-control" required>
                                    <?php
                                        if (isset($_GET['error'])) {
                                            if ($_GET["error"] === "email_exists") {
                                                echo "<div class='error-message'> Имейлът вече същевствува! </div>";
                                            } else if ($_GET["error"] === "invalid_email") {
                                                echo "<div class='error-message'> Въведете валиден имейл! </div>";
                                            }
                                        } 
                                    ?>
                                </div>
                                <div class="error-message">
                                </div>
                                <div class="form-group">
                                    <label class="font-comfortaa">Парола</label>
                                    <input type="password" name="password" class="form-control" required>
                                    <?php
                                        if (isset($_GET['error']) && $_GET["error"] === "invalid_password") {
                                            echo "<div class='error-message'> Паролата трябва да съдържа 8 знака и поне една буква! </div>";
                                        } 
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label class="font-comfortaa">Повторете паролата</label>
                                    <input type="password" name="repeat_password" class="form-control" required>
                                </div>
                                <?php
                                    if (isset($_GET['error']) && $_GET["error"] === "invalid_repeat_password") {
                                        echo "<div class='error-message mb-3'> Паролите трябва да съвпадат! </div>";
                                    } 
                                ?>
                                <button type="submit" name="submit"
                                    class="btn btn-primary register-button no-border-color font-comfortaa w-100">Регистриране</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require "../app/footer.php" ?>
</body>

</html>