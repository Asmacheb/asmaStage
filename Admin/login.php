<?php
// require_once 'database.php';;
// session_start();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $conn = getDatabaseConnection();
//     $identifiant = $_POST['identifiant'];
//     $password = $_POST['password'];

//     try {
//         $stmt = $conn->prepare("SELECT * FROM User WHERE identifiant = ?");
//         $stmt->execute([$identifiant]);
//         $user = $stmt->fetch(PDO::FETCH_ASSOC);

//         if ($user && password_verify($password, $user['password'])) {
//             $_SESSION['user_id'] = $user['id_user'];
//             header("Location: modifier.php");
//             exit();
//         } else {
//             echo "Identifiant ou mot de passe incorrect.";
//         }
//     } catch (PDOException $e) {
//         echo "Erreur : " . $e->getMessage();
//     }

//     $conn = null;
// }
?>
