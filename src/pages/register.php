<?php

function getTitle() {
    return 'Register';
}

include '../classes/character.php';
$races = character::CHARACTER_RACE;

?>

<?php
include 'layout/header.php';
include 'layout/navbar.php';
?>
<div class="container">
    <div class="px-3 text-center">
        <h1><?php echo getTitle() ?></h1>
        <p class="lead">You shall not pass</p>
    </div>
    <form method="POST" action="profile.php">
        <div class="form-group">
            <label for="formGroupNameInput">Enter your name</label>
            <input name="name" type="text" class="form-control" id="formGroupNameInput" placeholder="Loriél">
        </div>
        <div class="form-group">
            <label for="raceControlSelect">Choose race</label>
            <select name="race" class="form-control" id="raceControlSelect">
                <option value="Empty">Choose race</option>
                <?php foreach ($races as $race) : ?>
                <option value="<?php echo $race ?>"><?php echo $race ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="emailInput">Email address</label>
            <input name="email" type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="passwordInput">Password</label>
            <input name="password" type="password" class="form-control" id="passwordInput" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
include 'layout/footer.php';
?>
