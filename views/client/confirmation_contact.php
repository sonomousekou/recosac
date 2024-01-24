<?php
// Assurez-vous d'inclure votre fichier de configuration de base de données ici
// Exemple : include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérez les valeurs du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    // Validez les données
    if (!preg_match('/^\+\d{1,3}\d{9,15}$/', $telephone)) {
        // Le numéro de téléphone n'est pas au format international valide
        echo "Le numéro de téléphone n'est pas valide. Veuillez entrer un numéro de téléphone au format international, par exemple, '+224625167595'.";
    } else {
        // Établissez une connexion à la base de données (assurez-vous d'utiliser vos propres informations de connexion)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_recosac";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifiez la connexion à la base de données
        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        // Préparez la requête d'insertion
        $sql = "INSERT INTO Contact (nom, email, telephone, sujet, message) VALUES (?, ?, ?, ?, ?)";

        // Utilisez une requête préparée pour éviter les injections SQL
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $nom, $email, $telephone, $sujet, $message);

        // Exécutez la requête
        if ($stmt->execute()) {
            // Redirigez l'utilisateur vers la route contact_success
            header("Location: ./views/client/contact_success.view.php");
            exit(); // Assurez-vous de terminer le script après la redirection
        } else {
            echo "Erreur lors de l'insertion des données : " . $conn->error;
        }

        // Fermez la requête et la connexion
        $stmt->close();
        $conn->close();
    }
}
?>