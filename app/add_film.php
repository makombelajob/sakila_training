<?php
require_once 'includes/header.php';
?>
<body>
    <main class="container my-3 w-75 m-auto">
        <h1 class="text-center text-uppercase fs-1 fw-bolder">Add a film</h1>
        <form action="traitement/traitement_add_film.php" method="post">
            <div class="my-3">
                <label class="form-label fs-2" for="title">Title</label>
                <label class="w-100">
                    <input class="form-control fs-2" type="text" name="title"/>
                </label>
                <?php if(isset($errors) ?? '') : ;?>
                    <p class="text-center text-danger fs-1"><?= $errors['title'] ?? '' ;?></p>
                <?php endif;?>
            </div>

            <div class="my-3">
                <label class="form-label fs-2" for="langage_id">Language Id</label>
                <label class="w-100">
                    <input class="form-control fs-2" type="number" name="language_id"/>
                </label>
            </div>
            <div class="my-3">
                <label class="form-label fs-2" for="rental_duration">Rental duration</label>
                <label class="w-100">
                    <input class="form-control fs-2" type="number" name="rental_duration"/>
                </label>
            </div>
            <div class="my-3">
                <label class="form-label fs-2" for="rental_rate">Rental rate</label>
                <label class="w-100">
                    <input class="form-control fs-2" type="number" name="rental_rate"/>
                </label>
            </div>
            <div class="my-3">
                <label class="form-label fs-2" for="replacement_cost">Replacement cost</label>
                <label class="w-100">
                    <input class="form-control fs-2" type="number" name="replacement_cost"/>
                </label>
            </div>

            <div class="text-center my-3">
                <button class="btn btn-warning fs-1" type="submit">Add</button>
            </div>
        </form>
        <div class="text-center bg-warning">
            <?php if(isset($errors) ?? '') : ;?>
                <p class="text-center fs-1"><?= $errors['initial'] ?? '' ;?></p>
            <?php endif;?>
        </div>
    </main>
</body>
</html>