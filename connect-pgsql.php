<?php
// On identifie 3 variables
// Dans le DSN nous récupérons le gestionnaire de notre base de données (ici MySQL), puis l'adresse DSN fournie par votre hébergeur ou localhost pour du local.
$dsn = 'pgsql:host=127.0.0.1;dbname=connect-pgsql';
$username = 'postgres';
$password = 'dannio';
$options = [];

// L'objet PDO va recevoir en premier argument toutes les informations de ma base de données, en deuxième le login et au troisième le mot de passe. On utilise la méthode try catch pour sécuriser le tout en cas d'erreur.
try {
    $bdd = new PDO($dsn, $username, $password, $options );

    echo"connection reussie a la base de donnees postgress";
    
}  catch(PDOException $e) {
    die("erreur:" .$e->getMessage());

}