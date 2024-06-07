<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte</title>
</head>
<body>
    <h2>Créer un compte</h2>
    <form method="post" action="enregistrer.php"> 
        <label for="identifiant">Identifiant:</label>
        <input type="text" id="identifiant" name="identifiant" required><br><br>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Créer un compte</button>
    </form>
</body>
</html>

<?php
require_once 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = getDatabaseConnection();
    $identifiant = $_POST['identifiant'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hacher le mot de passe

    try {
        $stmt = $conn->prepare("INSERT INTO User (identifiant, password) VALUES (?, ?)");
        $stmt->execute([$identifiant, $password]);
        echo "Compte créé avec succès.";
        // Rediriger vers la page de connexion après la création du compte
        header("Location: connexion.php");
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    $conn = null;
}
?>

