<?php
require_once '../includes/connect.php';
global $pdo;
$errors = $catch = [];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $firstname = htmlspecialchars(trim($_POST['firstname']));
    $lastname = htmlspecialchars(trim($_POST['firstname']));
    if(empty($firstname) || empty($lastname) && strlen($firstname) > 45 || strlen($lastname) > 45){
        $errors['initial'] = 'Must follow all the instructions !';
    }else{
        $sql = "INSERT INTO actor (first_name, last_name) VALUES (:first_name, :last_name);";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':first_name', $firstname, PDO::PARAM_STR);
        $stmt->bindValue(':last_name', $lastname, PDO::PARAM_STR);
        $exec = $stmt->execute();
        if(!$exec){
            $catch['failed'] = 'Failed to execute !';
        }else{
            $catch['success'] = 'Adding done !';
        }
    }
}