<?php
$lotrBooks = include '../configuration/lotrbookapi.php';
include '../classes/Book.php';

function getTitle() {
    return 'Books';
}

$books = json_decode($lotrBooks, true);

$bookDetails = [];

foreach ($books["docs"] as $book){
    $bookNew = new Book();
    $bookNew->setName($book['name']);

    $bookDetails[] = $bookNew;
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
            <td><?php echo $detail->getName()?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php
include 'layout/footer.php';
?>
