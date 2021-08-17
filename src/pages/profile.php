<?php
include '../classes/profile.php';

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    die("Form can't submitted");
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $formInformations = [];
    $newProfile = new profile();

    $newProfile->setEmail($_POST['email']);
    $newProfile->setPassword($_POST['password']);
    $newProfile->setName($_POST['name']);
    $newProfile->setRace($_POST['race']);

    $formInformations[] = $newProfile;
}

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
            <?php foreach ($formInformations as $formDetail) : ?>
                <li class="list-group-item <?php echo (empty($formDetail->getName())) ? 'list-group-item-danger' : 'list-group-item-success';?>">Name : <?php echo $formDetail->getName()?></li>
                <li class="list-group-item <?php echo (empty($formDetail->getRace())) ? 'list-group-item-danger' : 'list-group-item-success';?>">Race : <?php echo $formDetail->getRace()?></li>
                <li class="list-group-item <?php echo (empty($formDetail->getEmail())) ? 'list-group-item-danger' : 'list-group-item-success';?>">Email : <?php echo $formDetail->getEmail()?></li>
                <li class="list-group-item <?php echo (empty($formDetail->getPassword())) ? 'list-group-item-danger' : 'list-group-item-success';?>">Password : <?php echo $formDetail->getPassword()?></li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>

<?php
include 'layout/footer.php';
?>