
<style>
<?php require "../styles/navigation.css"?>
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top transparency">
    <div class="container">
        <a class="navbar-brand" href="./home.php">
            <img class="navbar-brand-logo" src="../assets/images/icons/website_logo_white.png">
            <span class="navbar-brand-text">
                Parfyumi.info
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active pointer mr-4">
                    <a class="nav-link" href="./home.php">Начало
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active dropdown pointer mr-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true">
                        Парфюми
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item pointer" href="./frag-list.php">Лист с парфюми</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item pointer" target="_blank" rel="noopener noreferrer"
                            href="https://www.maxim.com/style/winter-colognes-2018-11">Топ
                            10 за сезона</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item pointer" target="_blank" rel="noopener noreferrer"
                            href="https://www.fragrantica.com/">Новини</a>
                    </div>
                </li>
                <?php
                    if (isset($_SESSION["isAdmin"]) && $_SESSION['isAdmin']) {
                        echo "<li class='nav-item active mr-4'>
                                <a class='nav-link' href='./messages.php'>Съобщения</a>
                            </li>";
                    }
                ?>
                <?php 
                    if (isset($_SESSION["username"])) {
                        echo "<li class='nav-item active mr-4'>
                                <a class='nav-link unselectable'>Здравейте, ". $_SESSION['first_name'] ."</a>
                            </li>
                            <li class='nav-item active pointer mr-4'>
                                <a class='nav-link' href='../includes/logout.inc.php'>Излизане</a>
                            </li>";
                    } else {
                        echo "<li class='nav-item active pointer mr-4'>
                                <a class='nav-link' href='./login.php'>Влизане</a>
                            </li>
                            <li class='nav-item active pointer'>
                                <a class='nav-link' href='./register.php'>Регистриране</a>
                            </li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>