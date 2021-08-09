<?php
$lotrCharacters = include '../configuration/lotrcharacterapi.php';
include '../classes/character.php';

function getTitle() {
    return 'Characters';
}

$characters = json_decode($lotrCharacters, true);

$characterDetails = [];

foreach ($characters["docs"] as $character){
    $characterNew = new Character();

    $characterNew->setName($character['name']);
    $characterNew->setRace($character['race']);
    $characterNew->setRealm($character['realm']);

    if($characterNew->getRace() != '' || $characterNew->getRace() != NULL) {
        $characterDetails[] = $characterNew;
    }

}

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
            <td><?php echo $detail->getName() ?></td>
            <td><?php echo $detail->getRace() ?></td>
            <td><?php echo $detail->getRealm() ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php
include 'layout/footer.php';
?>
