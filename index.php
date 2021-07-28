<?php

function getTitle() {
    return 'Anasayfa';
}

?>

<?php
include_once 'pages/layout/header.php';
include_once 'pages/layout/navbar.php';
?>
<main class="px-3 middle-section text-center">
    <h1><?php echo getTitle() ?></h1>
    <p class="lead">You shall not pass</p>
</main>
<?php
include_once 'pages/layout/footer.php';
?>
