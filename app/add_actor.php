<?php

require_once 'includes/header.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="container">
    <main class="row">
        <h1 class="fs-1 text-center text-uppercase my-3 fw-bolder">Add actor</h1>
        <form action="traitement/traitement_add_actor.php" method="post">
            <div>
                <label class="form-label fs-2 my-3" for="firstname">Firstname</label>
                <label class="w-100">
                    <input class="form-control fs-3" type="text" name="firstname" id="firstname">
                </label>
            </div>
            <div>
                <label class="form-label fs-2 my-3" for="lastname">Lastname</label>
                <label class="w-100">
                    <input class="form-control fs-3" type="text" name="lastname" id="lastname">
                </label>
            </div>
            <div class="text-center my-5">
                <button class="fs-3 btn btn-primary" type="submit">Add actor</button>
            </div>
        </form>
        <div class="text-center bg-warning rounded-3">
            <?php if(isset($errors) ?? isset($catch) ?? '') : ;?>
                <p class="fs-2"><?= $errors['initial'] ?? $catch['failed'] ?? $catch['success'] ?? '';?></p>
            <?php endif;?>
        </div>
    </main>
</body>
</html>
