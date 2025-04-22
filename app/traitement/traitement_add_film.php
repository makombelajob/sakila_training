<?php
global $pdo;
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = htmlspecialchars(trim($_POST['title'])) ?? '';
    $langageId = htmlspecialchars($_POST['language_id']);
    $rentalDuration = htmlspecialchars($_POST['rental_duration']);
    $rentalRate = htmlspecialchars($_POST['rental_rate']);
    $replacementCost = htmlspecialchars($_POST['replacement_cost']);
    if (empty($title) || empty($langageId) || empty($rentalDuration) || empty($rentalRate) || empty($replacementCost) && strlen($title) > 50 || !is_numeric($langageId) || !is_numeric($rentalDuration) || !is_numeric($rentalRate) || !is_numeric($replacementCost) ) {
        $errors['initial'] = 'Fill all input !';
        header('Refresh:2, url=../add_film.php');
    }else{
        require_once '../includes/connect.php';
        $sql = 'INSERT INTO film (title, language_id, rental_duration, rental_rate, replacement_cost) VALUES(:title, :language_id, :rental_duration, :rental_rate, :replacement_cost);';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':title', $title, PDO::PARAM_STR);
        $stmt->bindValue(':language_id', $langageId, PDO::PARAM_INT);
        $stmt->bindValue(':rental_duration', $rentalDuration, PDO::PARAM_INT);
        $stmt->bindValue(':rental_rate', $rentalRate, PDO::PARAM_INT);
        $stmt->bindValue(':replacement_cost', $replacementCost, PDO::PARAM_INT);
        $exec = $stmt->execute();
        if(!$exec){
            $errors['addFailed'] = 'Adding failed';
        }else{
            header('Refresh:2, url=../index.php');
        }

    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="container">
    <main class="row">
        <h1 class="fs-1 text-center text-uppercase">Errors Messages</h1>
        <div class="text-center bg-warning rounded-3">
            <?php if(isset($errors) ?? '') : ;?>
                <p class="fs-1"><?= $errors['initial'] ?? $errors['success'] ?? $errors['addFailed'] ?? '' ;?></p>
            <?php endif;?>
        </div>
    </main>
</body>
</html>
