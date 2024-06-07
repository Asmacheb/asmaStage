<?php
require_once 'database.php';
session_start();

// Initialiser le message d'erreur
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = getDatabaseConnection();
    $identifiant = $_POST['identifiant'];
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT * FROM User WHERE identifiant = ?");
        $stmt->execute([$identifiant]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['id_user'] = $user['id_user'];
            header("Location: modifier.php");
            exit();
        } else {
            $error_message = "Identifiant ou mot de passe incorrect.";
        }
    } catch (PDOException $e) {
        $error_message = "Erreur : " . $e->getMessage();
    }

    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
</head>
<body>
    <h2>Se connecter</h2>
    <?php
    if (!empty($error_message)) {
        echo "<p style='color:red;'>$error_message</p>";
    }
    ?>
    <form method="post" action="connexion.php">
        <label for="identifiant">Identifiant:</label>
        <input type="text" id="identifiant" name="identifiant" required><br><br>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
