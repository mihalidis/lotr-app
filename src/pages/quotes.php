<?php
include '../classes/quote.php';

function getTitle() {
    return 'Quotes';
}
// Todo: API'S can come with class system , examine https://github.com/Potterhead/app/pull/19/files
$lotrMovies = include '../configuration/lotrmovieapi.php';
$lotrCharacters = include '../configuration/lotrcharacterapi.php';
$lotrQuotes = include '../configuration/lotrquoteapi.php';

$quotes = json_decode($lotrQuotes, true);
$movies = json_decode($lotrMovies, true);
$characters = json_decode($lotrCharacters, true);

$quoteDetails = [];

foreach ($quotes["docs"] as $quote){

    $quoteNew = new Quote();

    $quoteNew->setMovie($quote['movie'], $movies);
    $quoteNew->setCharacter($quote['character'], $characters);
    $quoteNew->setDialog($quote['dialog']);

    $quoteDetails[] = $quoteNew;
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
            <th scope="col">Character</th>
            <th scope="col">Movie</th>
            <th scope="col">Dialog</th>
        </tr>
        </thead>

        <tbody>

        <?php
        $counter = 1;
        foreach ($quoteDetails as $detail):
            ?>
            <tr>
                <th scope="row"><?php echo $counter++; ?></th>
                <td><?php echo $detail->getCharacter()?></td>
                <td><?php echo $detail->getMovie()?></td>
                <td><?php echo $detail->getDialog()?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php
include 'layout/footer.php';
?>