<?php

function getTitle() {
    return 'Books';
}

$lotrBooks = include '../configuration/lotrbookapi.php';

$books = json_decode($lotrBooks, true);

$bookDetails = [];

foreach ($books["docs"] as $book){
    $bookDetails[] = [
        'name' => $book['name'],
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
    foreach ($bookDetails as $detail):
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
