<?php

function getTitle() {
    return 'Movies';
}

$lotrMovies = include '../configuration/lotrmovieapi.php';

$movies = json_decode($lotrMovies, true);

$movieDetails = [];

foreach ($movies["docs"] as $movie){
    $movieDetails[] = [
        'name' => $movie['name'],
        'budgetInMillions' => (string) $movie['budgetInMillions'],
        'academyAwardNominations' => (string) $movie['academyAwardNominations'],
        'academyAwardWins' => (string) $movie['academyAwardWins'],
        'rottenTomatoesScore' => (string) $movie['rottenTomatoesScore'],
    ];
}

/*
$deneme = $movies["docs"][0]['budgetInMillions'];
$cevir = (string) $deneme;
die(var_dump($cevir));
*/

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
                <td><?php echo $detail['name']?></td>
                <td><?php echo $detail['budgetInMillions']?> Million</td>
                <td><?php echo $detail['academyAwardNominations']?></td>
                <td><?php echo $detail['academyAwardWins']?></td>
                <td><?php echo $detail['rottenTomatoesScore']?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
include 'layout/footer.php';
?>
