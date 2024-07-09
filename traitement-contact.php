<?php
// Informations de connexion à la base de données
$serveur = "localhost"; // Adresse du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur MySQL
$motDePasse = ""; // Mot de passe MySQL
$nomBaseDonnees = "bd_cpc"; // Nom de la base de données MySQL

// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $nomBaseDonnees);

// Vérification de la connexion
if (!$connexion) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Récupération des données à partir du formulaire
// iniatialisation des messages succes et echec

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $date = date('Y-m-d H:i:s');

    // Requête d'insertion des données dans la base de données
    $requete = "INSERT INTO contact (nomcomplet, email, message,date) VALUES ('$nom', '$email', '$message','$date')";

    // Exécution de la requête
    if (mysqli_query($connexion, $requete)) {
        echo "Merci de nous avoir laisser un message, nous vous reviendrons tres bientot!";
         // succes - Redirection vers une page de succes
        //  header("Location: contact.php");
        //  exit();
    } else {
         // Échec - Redirection vers une page d'échec
        //  header("Location: echec.php");
        //  exit();
        echo "Erreur : " . $requete . "<br>" . mysqli_error($connexion);
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($connexion);
}

?>


