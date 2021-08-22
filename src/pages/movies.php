<?php

include "../../vendor/autoload.php";
use LotrApp\Classes\Movie;

$lotrMovies = include '../configuration/lotrmovieapi.php';

function getTitle() {
    return 'Movies';
}

$movieDetails = [];

foreach ($lotrMovies["docs"] as $movie){
    $movieNew = new Movie();

    $movieNew->setName($movie['name']);
    $movieNew->setBudgetInMillions((string) $movie['budgetInMillions']);
    $movieNew->setAcademyAwardNominations((string) $movie['academyAwardNominations']);
    $movieNew->setAcademyAwardWins((string) $movie['academyAwardWins']);
    $movieNew->setRottenTomatoesScore((string) $movie['rottenTomatoesScore']);

    $movieDetails[] = $movieNew;
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
        <th scope="col">Budget</th>
        <th scope="col">Academy Award Nominations</th>
        <th scope="col">Academy Award Wins</th>
        <th scope="col">Rotten Tomatoes Score</th>
    </tr>
    </thead>

    <tbody>

    <?php
    $counter = 1;
    foreach ($movieDetails as $detail):
            ?>
            <tr>
                <th scope="row"><?php echo $counter++; ?></th>
                <td><?php echo $detail->getName()?></td>
                <td><?php echo $detail->getBudgetInMillions()?> Million</td>
                <td><?php echo $detail->getAcademyAwardNominations()?></td>
                <td><?php echo $detail->getAcademyAwardWins()?></td>
                <td><?php echo $detail->getRottenTomatoesScore()?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
include 'layout/footer.php';
?>
