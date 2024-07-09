<?php
// Informations de connexion à la base de données
$serveur = "localhost"; // Adresse du serveur MySQL
$utilisateur = "nom_utilisateur"; // Nom d'utilisateur MySQL
$motDePasse = "mot_de_passe"; // Mot de passe MySQL
$nomBaseDonnees = "nom_base_de_donnees"; // Nom de la base de données MySQL

// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $nomBaseDonnees);

// Vérification de la connexion
if (!$connexion) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Récupération des données à partir du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Requête d'insertion des données dans la base de données
    $requete = "INSERT INTO table_nom (nom, email, message) VALUES ('$nom', '$email', '$message')";

    // Exécution de la requête
    if (mysqli_query($connexion, $requete)) {
        echo "Les données ont été insérées avec succès.";
    } else {
        echo "Erreur : " . $requete . "<br>" . mysqli_error($connexion);
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($connexion);
}
?>
