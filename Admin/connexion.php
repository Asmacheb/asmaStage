<?php
require_once 'database.php';
session_start();

$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recaptcha_secret = '6Lfs0_cpAAAAADeJaSUqP_5BI-gWiG7j284kvXyG';
    $recaptcha_response = $_POST['g-recaptcha-response'];

    // Vérifiez la réponse reCAPTCHA
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    if ($recaptcha->success) {
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
    } else {
        $error_message = "Erreur reCAPTCHA. Veuillez réessayer.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" type="text/css" href="../Style/connexion.css">
    <link rel="icon" href="../img/logosnack.png" type="image/png">
</head>
<body>
<div class="logoHome"><a href="../index.php#home"><img src="../img/logoHome.png" alt="Logo"></a></div>
    <div class="connect">
    <h2>CONNEXION</h2>
    <?php
    if (!empty($error_message)) {
        echo "<p style='color:red;'>$error_message</p>";
    }
    ?>
    <div class="formulaire">
    <form method="post" action="connexion.php">
        <label for="identifiant">Identifiant</label>
        <input type="text" id="identifiant" name="identifiant" required><br><br>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required><br><br>
        <div class="containerCaptacha">
            <div class="g-recaptcha" data-sitekey="6Lfs0_cpAAAAAGAIuD5-uWJUmk-NFSVlM0q_gsuD"></div>
        </div>  
        <button type="submit">Se connecter</button>
    </form>
    </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
