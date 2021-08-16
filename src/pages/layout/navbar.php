<?php

$title = 'Lord Of The Rings';

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><?php echo $title ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/index.php'){echo 'active';}; ?>" href="/index.php">Main</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/src/pages/movies.php'){echo 'active';}; ?>"" href="/src/pages/movies.php">Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/src/pages/books.php'){echo 'active';}; ?>"" href="/src/pages/books.php">Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/src/pages/characters.php'){echo 'active';}; ?>"" href="/src/pages/characters.php">Characters</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/src/pages/quotes.php'){echo 'active';}; ?>"" href="/src/pages/quotes.php">Quotes</a>
            </li>
        </ul>
        <div>
            <a class="btn btn-outline-success my-2 my-sm-0" type="button" href="/src/pages/register.php"> Register </a>
        </div>
    </div>
</nav>