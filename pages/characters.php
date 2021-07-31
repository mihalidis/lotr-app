<?php

function getTitle() {
    return 'Characters';
}

$lotrCharacters = include '../configuration/lotrcharacterapi.php';

$characters = json_decode($lotrCharacters, true);

$characterDetails = [];

foreach ($characters["docs"] as $character){
    $characterDetails[] = [
        'name' => $character['name'],
        'race' => $character['race'],
        'gender' => $character['gender'],
        'realm' => $character['realm'],
    ];
}
// ISSUE: Some data comes with undefined index, solve that!
?>

<?php
include 'layout/header.php';
include 'layout/navbar.php';
?>

<h1 class="text-center"><?php echo getTitle() ?></h1>

<table class="table">

    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Race</th>
        <th scope="col">Realm</th>
    </tr>
    </thead>

    <tbody>

    <?php
    $counter = 1;
    foreach ($characterDetails as $detail):
        ?>
        <tr>
            <th scope="row"><?php echo $counter++; ?></th>
            <td><?php echo $detail['name']?></td>
            <td><?php echo $detail['race']?></td>
            <td><?php echo $detail['realm']?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php
include 'layout/footer.php';
?>
