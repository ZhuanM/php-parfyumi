<?php

session_start();

?>

<style>
<?php require "../styles/home.css"?>
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
    <?php require 'navigation.php'?>

    <div class="main-screen drag-to-navbar">
        <div class="row ml-0 mr-0 first-view">
            <div class="col pt-5 d-flex justify-content-center align-items-center">
                <div class="main-title mt-4">
                    Светът на парфюмите
                </div>
            </div>
        </div>
        <div class="row m-0 second-view pl-4 pr-4 pb-5 pt-4 align-items-center">
            <div class="col p-0">
                <div class="row m-0">
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="second-view-title fs-26px mb-4">
                            Научете за:
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-xs-12 col-md-5 col-lg-5 col-xl-2 p-0 container info-card first">
                        <div class="card-img-wrapper">
                            <div class="card-top-img first"></div>
                        </div>
                        <div class="mt-1 p-3">
                            <ul class="description-list px-4">
                                <li>Парфюмите на известните личности по света</li>
                                <hr class="my-1">
                                <li>Най-харесваните парфюми от различните половете</li>
                                <hr class="my-1">
                                <li>Избиране на парфюм като подарък</li>
                            </ul>
                        </div>
                        <div>
                            <a target="_blank" rel="noopener noreferrer" href="https://www.fragrantica.com/">
                                <button class="btn card-button d-flex w-100 justify-content-center">
                                    <span class="card-button-text">Още</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5 col-lg-5 col-xl-2 p-0 container info-card second">
                        <div class="card-img-wrapper">
                            <div class="card-top-img second"></div>
                        </div>
                        <div class="mt-1 p-3">
                            <ul class="description-list px-4">
                                <li>Как да организираме колекцията си от парфюми</li>
                                <hr class="my-1">
                                <li>Как да подбираме парфюми за нашата колекция</li>
                                <hr class="my-1">
                                <li>Как да спестяваме пари при купуването на парфюми</li>
                            </ul>
                        </div>
                        <div>
                            <a target="_blank" rel="noopener noreferrer" href="https://www.fragrantica.com/">
                                <button class="btn card-button d-flex w-100 justify-content-center">
                                    <span class="card-button-text">Още</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5 col-lg-5 col-xl-2 p-0 container info-card third">
                        <div class="card-img-wrapper">
                            <div class="card-top-img third"></div>
                        </div>
                        <div class="mt-1 p-3">
                            <ul class="description-list px-4">
                                <li>Защо естествените масла са важни за кожата ни</li>
                                <hr class="my-1">
                                <li>Издържливост на различните нотки</li>
                                <hr class="my-1">
                                <li>От къде произлизат нотките в парфюмите</li>
                            </ul>
                        </div>
                        <div>
                            <a target="_blank" rel="noopener noreferrer" href="https://www.fragrantica.com/">
                                <button class="btn card-button d-flex w-100 justify-content-center">
                                    <span class="card-button-text">Още</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5 col-lg-5 col-xl-2 p-0 container info-card fourth">
                        <div class="card-img-wrapper">
                            <div class="card-top-img fourth"></div>
                        </div>
                        <div class="mt-1 p-3">
                            <ul class="description-list px-4">
                                <li>Какво представляват нишовите парфюми</li>
                                <hr class="my-1">
                                <li>Какво представляват дизайнерските парфюми</li>
                                <hr class="my-1">
                                <li>Мнения на инфлуенсъри в света на парфюмерията</li>
                            </ul>
                        </div>
                        <div>
                            <a target="_blank" rel="noopener noreferrer" href="https://www.fragrantica.com/">
                                <button class="btn card-button d-flex w-100 justify-content-center">
                                    <span class="card-button-text">Още</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0 fourth-view-desktop">
            <div class="contact-wrapper">
                <div class="left-contact">
                    <div class="left-contact-content-wrapper">
                        <div class="left-contact-text">
                            Свържете се с нас за обратна връзка
                        </div>
                        <div class="right-arrow-icon"></div>
                    </div>
                </div>
                <div class="right-contact">
                    <div class="contact-card p-3">
                        <form>
                            <div class="form-group mb-3">
                                <label for="name-contact">Име</label>
                                <input type="text" class="form-control" id="name-contact" aria-describedby="emailHelp"
                                    placeholder="Напишете вашето име">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email-contact">Имейл</label>
                                <input type="text" class="form-control" id="email-contact"
                                    placeholder="Напишете вашият имейл">
                            </div>
                            <div class="form-group last-margin">
                                <label for="message-contact">Съобщение</label>
                                <textarea class="form-control" id="message-contact" rows="3" cols="50"
                                    placeholder="Напишете вашето съобщение"></textarea>
                            </div>
                            <div class="contact-button-wrapper d-flex align-items-center">
                                <a href="../app/index.php">
                                    <button type="submit" class="btn contact-button d-flex justify-content-center">
                                        <span class="contact-button-text">Изпрати</span>
                                    </button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="fourth-view-mobile">
            <div class="row m-0 pt-5 align-items-center top-content">
                <div class="col mt-5">
                    <div class="top-contact-text">
                        Свържете се с нас за обратна връзка
                    </div>
                    <div class="right-arrow-icon-mobile mt-4"></div>
                </div>
            </div>
            <div class="row m-0 align-items-center bottom-content">
                <div class="col d-flex justify-content-center">
                    <div class="bottom-contact">
                        <div class="contact-card-mobile p-3">
                            <form>
                                <div class="form-group mb-3">
                                    <label for="name-contact">Име</label>
                                    <input type="text" class="form-control" id="name-contact"
                                        aria-describedby="emailHelp" placeholder="Напишете вашето име">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email-contact">Имейл</label>
                                    <input type="text" class="form-control" id="email-contact"
                                        placeholder="Напишете вашият имейл">
                                </div>
                                <div class="form-group last-margin">
                                    <label for="message-contact">Съобщение</label>
                                    <textarea class="form-control" id="message-contact" rows="3" cols="50"
                                        placeholder="Напишете вашето съобщение"></textarea>
                                </div>
                                <div class="contact-button-wrapper d-flex align-items-center">
                                    <a href="../app/index.php">
                                        <button type="submit" class="btn w-100 contact-button d-flex justify-content-center">
                                            <span class="contact-button-text">Изпрати</span>
                                        </button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'footer.php'?>
</body>

</html>