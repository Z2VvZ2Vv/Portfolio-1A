<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Contact</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon" />
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div id="returnPHP">

    <?php
    // Initialiser un tableau pour les messages d'erreur
    $errors = [];

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer et nettoyer les données envoyées
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $reason = trim($_POST['reason']);
        $appointment = trim($_POST['appointment']);
        $first_request = isset($_POST['first_request']) ? $_POST['first_request'] : '';
        $message = trim($_POST['message']);

        // Vérification des champs obligatoires
        if (empty($name)) {
            $errors[] = "Le champ Nom est obligatoire.";
        }

        if (empty($email)) {
            $errors[] = "Le champ Email est obligatoire.";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "L'adresse e-mail saisie n'est pas valide.";
        }

        if (empty($message)) {
            $errors[] = "Le champ Message est obligatoire.";
        }

        // Vérifier s'il y a des erreurs
        if (empty($errors)) {
            // Affichage des données si tout est validé
            echo "<h2>Récapitulatif de votre demande</h2>";
            echo "<p><strong>Nom :</strong> " . htmlspecialchars($name) . "</p>";
            echo "<p><strong>Email :</strong> " . htmlspecialchars($email) . "</p>";
            echo "<p><strong>Téléphone :</strong> " . htmlspecialchars($phone) . "</p>";
            echo "<p><strong>Motif de contact :</strong> " . htmlspecialchars($reason) . "</p>";
            echo "<p><strong>Créneau horaire :</strong> " . htmlspecialchars($appointment) . "</p>";
            echo "<p><strong>Est-ce votre première demande ? :</strong> " . htmlspecialchars($first_request) . "</p>";
            echo "<p><strong>Votre message :</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>";
        } else {
            // Afficher les erreurs
            echo "<h2>Erreurs :</h2>";
            foreach ($errors as $error) {
                echo "<p>" . htmlspecialchars($error) . "</p>";
            }
        }
    }
    ?>
    <p id="finalMessage">Votre demande a été prise en compte et va être étudiée.</p>
    <a href="index.php" id="return">Retourner à la page d'accueil</a>
    </div>  
    <?php include 'footer.php'; ?>
  </body>
</html>
