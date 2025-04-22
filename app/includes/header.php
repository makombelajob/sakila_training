
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sakila_styles.css">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>document</title>
</head>
<body>
<header class="container p-3 mb-4">
    <nav class="row mb-5">
        <h2 class="col text-uppercase text-danger fs-1">Sakila</h2>
        <div class="col-12">
            <ul class="d-flex justify-content-between list-unstyled">
                <li class=""><a class="text-decoration-none fs-4 text-secondary" href="../index.php">home</a></li>
                <li class=""><a class="text-decoration-none fs-4 text-secondary" href="../add_film.php">add film</a></li>
                <li class=""><a class="text-decoration-none fs-4 text-secondary" href="../add_actor.php">add actor</a></li>
            </ul>
        </div>
        <form class="col-8 m-auto" action="" method="post" >
            <div class="row ">
                <label class="col-2 fs-4" for="category">Choose</label>
                <select class="col-9" name="categories" id="category">
                    <option value="">All</option>
                    <option value="one_by_one">One by one</option>
                    <option value="add_film">Add film</option>
                </select>
            </div>
        </form>
        <button class="col-2 m-auto btn btn-danger">signing</button>
    </nav>
    <section class="row text-center ">
        <div class="col-12 mt-5">
            <div class="row">
                <h2 class="col-12fs-1">Unlimited movies, Tv shows, and more</h2>
                <span class="col-12">Stars at EUR 7.99</span>
                <p>Ready to watch and manipulate <span>Sakila</span> </p>
            </div>
            <form class="row" action="" method="post">
                <label class="w-75 m-auto col-10">
                    <input name="searchFilm" class="form-control fs-5" type="text" placeholder="Search for a film" value=""
                    />
                </label>
                <div class="col-2">
                    <button class="btn btn-warning fs-5" type="submit">search</button>
                </div>
            </form>
        </div>
    </section>
</header>