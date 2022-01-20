<?php

session_start();

require('../config/connection.php');

$query = "SELECT * FROM fragrances ORDER BY gender DESC";

$fragrances = $conn->query($query);

?>

<style>
<?php  require "../styles/frag-list.css" ?>
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
    <!-- CUSTOM CSS PHP -->
    <link rel="stylesheet" type="text/css" href="../styles/frag-list.css.php">
</head>

<body>
    <?php require 'navigation.php'?>

    <div class="entirety drag-to-navbar">
        <div class="container main-padding">
            <div class="row justify-content-center">
                <?php
                    if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']) { ?> 
                    <div class='col-xl-4 col-lg-4 col-md-6'>
                        <div class='header-wrapper'>
                            <div class='header-text'>
                                Админски панел
                            </div>
                            <hr class='custom-divider mb-0'>
                            <div class='form-wrapper'>
                                <form class='m-0 p-3' action='../includes/frag-list.inc.php' method='post' autocomplete='off'>
                                    <div class='form-group'>
                                        <label class='font-comfortaa' for='add_name'>Име</label>
                                        <input type='text' name='add_name' id='add_name' class='form-control font-comfortaa' required>
                                    </div> <?php 
                                        if (isset($_GET['error']) && $_GET['error'] === 'name_exists') {
                                            echo "<div class='error-message mb-3'> Името вече съществува! </div>";
                                        } 
                                    ?>
                                    <div class='form-group'>
                                        <label class='font-comfortaa' for='add_brand'>Дизайнер</label>
                                        <input type='text' name='add_brand' id='add_brand' class='form-control font-comfortaa' required>
                                    </div>
                                    <div class='form-group'>
                                        <label class='font-comfortaa' for='add_gender'>Пол</label>
                                        <select class='custom-select font-comfortaa pointer' name='add_gender' id='add_gender'>
                                          <option value='Мъже'>Мъже</option>
                                          <option value='Жени'>Жени</option>
                                          <option value='Унисекс'>Унисекс</option>
                                        </select>
                                    </div>
                                    <div class='form-group'>
                                        <label class='font-comfortaa' for='add_image'>Снимка</label>
                                        <input type='text' name='add_image' id='add_image' class='form-control font-comfortaa' required>
                                    </div>
                                    <div class='row justify-content-center'>
                                        <button type='submit' name='add_submit' class='btn btn-primary add-button no-border-color font-comfortaa w-50'>Добавяне</button>
                                    </div>
                                </form>
                            </div>
                            <hr class='mb-0'>
                            <div class='form-wrapper'>
                                <form class='m-0 p-3' action='../includes/frag-list.inc.php' method='post' autocomplete='off'>
                                    <div class='form-group'>
                                        <label class='font-comfortaa' for='remove_name'>Име</label>
                                        <input type='text' name='remove_name' id='remove_name' class='form-control' required>
                                    </div> <?php
                                        if (isset($_GET['error']) && $_GET['error'] === 'name_doesnt_exist') {
                                            echo "<div class='error-message mb-3'> Името не съществува! </div>";
                                        } 
                                    ?>
                                    <div class='row justify-content-center'>
                                        <button type='submit' name='remove_submit' class='btn btn-primary remove-button no-border-color font-comfortaa w-50'>Премахване</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <?php ;
                    }
                ?>
                <div class="col-xl-8 col-lg-8 col-md-6">
                    <div class="header-wrapper frags text-center">
                        <div class="header-text">
                            Лист с парфюми
                        </div>
                        <hr class="custom-divider">
                        <div class="fragrances mb-3">
                            <?php
                                while ($frag = mysqli_fetch_assoc($fragrances)) :
                            ?>
                                <div class="d-inline-block fragrance-container pointer">
                                <?php
                                    if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']) { ?> 
                                        <form class='m-0' action='../includes/frag-list.inc.php' method='post'>
                                            <input type='hidden' name='frag_id' value='<?=$frag['id']?>'>
                                            <button type='submit' name='quick_delete' class='btn quick-delete-button no-border-color'>
                                                <i class="fas fa-times-circle close-circle"></i>
                                            </button>
                                        </form> <?php ;
                                    }
                                    ?>
                                  <img src="<?= $frag["image"]; ?>" alt="Fragrance image">
                                  <div class="frag-name"><?= $frag["name"]; ?></div>
                                  <div class="frag-brand"><?= $frag["brand"]; ?></div>
                                  <div class="frag-gender mb-1"><?= $frag["gender"] ?></div>
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