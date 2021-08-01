<?php

function getTitle() {
    return 'Characters';
}
// Todo: API'S can come with class system , examine https://github.com/Potterhead/app/pull/19/files

$lotrMovies = include '../configuration/lotrmovieapi.php';
$lotrQuotes = include '../configuration/lotrquoteapi.php';

$movies = json_decode($lotrMovies, true);
$quotes = json_decode($lotrQuotes, true);

$quoteDetails = [];

foreach ($quotes["docs"] as $quote){
    // quote's movie id
    $movieID = $quote['movie'];
    // find quote's movie object placement in movies array with spesific quote's movieID
    $moviePlacementInArray = array_search($movieID, array_column($movies["docs"], '_id'));
    //Get movie name based on placement in Movies array
    $movieName = $movies["docs"][$moviePlacementInArray]['name'];

    $quoteDetails[] = [
        'dialog' => $quote['dialog'],
        'movie' => $movieName
    ];
};

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
            <th scope="col">Dialog</th>
            <th scope="col">Movie</th>
        </tr>
        </thead>

        <tbody>

        <?php
        $counter = 1;
        foreach ($quoteDetails as $detail):
            ?>
            <tr>
                <th scope="row"><?php echo $counter++; ?></th>
                <td><?php echo $detail['dialog']?></td>
                <td><?php echo $detail['movie']?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php
include 'layout/footer.php';
?>