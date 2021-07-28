<?php

function getTitle() {
    return 'Movies';
}

$lotrMovies = include '../configuration/lotrmovieapi.php';

$movies = json_decode($lotrMovies, true);

$movieDetails = [];

foreach ($movies as $movie){
    $movieDetails[] = [
    'name' => $movie['name']
    ];
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
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
include 'layout/footer.php';
?>
