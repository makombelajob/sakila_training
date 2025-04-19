<?php
// Définition des informations de connexion
const DBHOST = 'database'; // Serveur de base de données
const DBNAME = 'sakila'; // Nom de la base de données
const DBUSER = 'admin'; // Utilisateur de la base de données
const DBPASS = 'admin7791'; // Mot de passe de l'utilisateur


try{
    // On essaie d'exécuter ce bloc
    // On écrit le DSN de connexion
    $dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;

    // On crée une nouvelle instance de PDO
    $pdo = new PDO($dsn, DBUSER, DBPASS);

    // On configure les interactions avec le serveur de base de données
    // On définit le jeu de caractères à UTF8 (alphabet)
    $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');

    // On définit le mode de récupération des données sur FETCH_ASSOC
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // On définit le mode de gestion des erreurs pour qu'elles envoient une exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect = '<p class="fs-1 text-center text-uppercase">connected</p>';
} catch (PDOException $exception) {
    // Ce bloc s'exécute si on a une erreur dans try
    // Si PDO échoue on met un message d'erreur
    die('Message : ' . $exception->getMessage());
}
