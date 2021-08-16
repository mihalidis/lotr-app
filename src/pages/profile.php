<?php

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    die("Form can't submitted");
}

$formInformation = $_POST;

function getTitle() {
    return 'Profile';
}

?>

<?php
include 'layout/header.php';
include 'layout/navbar.php';
?>
    <div class="container">
        <div class="px-3 text-center">
            <h1><?php echo getTitle() ?></h1>
            <p class="lead">Profile information</p>
        </div>
        <div>
            <ul class="list-group">
                <li class="list-group-item">Profile Information</li>
            <?php foreach ($formInformation as $keyInfo => $value) : ?>
                <li class="list-group-item list-group-item-success"><?php echo $keyInfo ?> : <?php echo $value ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>

<?php
include 'layout/footer.php';
?>