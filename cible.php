
<!DOCTYPE html>
<html>
<head>
    <title>Résultats</title>
</head>
<body>
    <?php
    // Vérification que des données ont été envoyées par méthode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération et sécurisation des données du formulaire
        $nom = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
        $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
        $date = isset($_POST['date']) ? htmlspecialchars($_POST['date']) : ''; // Correction de la variable date
        
        // Affichage des données
        echo "<h2>Informations reçues :</h2>";
        echo "Nom: " . $nom . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Téléphone: " . $phone . "<br>";
        echo "Date: " . $date . "<br>";
    } else {
        echo "<p>Aucune donnée n'a été reçue. Veuillez remplir le formulaire.</p>";
    }
    ?>
</body>
</html>

