<?php
global $pdo;
require_once 'includes/connect.php';

$sql = 'SELECT film_id, title, description, release_year FROM film;';
$stmt = $pdo->query($sql);
$films = $stmt->fetchAll();
require_once 'includes/header.php';
?>

    <main class="container">
        <section class="row">
            <h1 class="text-center text-uppercase">All movies</h1>
            <?php foreach ($films as $film) : ;?>
                <article class="col-5 my-1 m-auto card text-center bg-info">
                    <span class="fw-bolder"><?= $film['film_id'];?></span>
                    <h2 class="text-center fs-2"><?= $film['title'] ;?></h2>
                    <p class="fs-3"><?= $film['description'] ;?></p>
                    <date class="fs-4"><?= $film['release_year'] ;?></date>
                </article>
            <?php endforeach;?>
        </section>
    </main>

