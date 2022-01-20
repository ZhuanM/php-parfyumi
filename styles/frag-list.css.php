<style type="text/css">

<?php

header("Content-type: text/css; charset: UTF-8");

if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']) {
    $frag_height = "315px !important;";
} else {
    $frag_height = "280px !important;"
}

?>

.fragrance-container {
    height: <?php echo $frag_height; ?>
}