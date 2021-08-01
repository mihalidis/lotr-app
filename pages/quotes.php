<?php

function getTitle() {
    return 'Characters';
}

$lotrQuotes = include '../configuration/lotrquoteapi.php';

$quotes = json_decode($lotrQuotes, true);

$quoteDetails = [];

foreach ($quotes["docs"] as $quote){
    $quoteDetails[] = [
        'dialog' => $quote['dialog'],
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
                <td><?php echo $detail['dialog']?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php
include 'layout/footer.php';
?>