<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    header("Location: connexion.php");
    exit();
}

require_once 'database.php';
$conn = getDatabaseConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_prix = $_POST['id_prix'];
    $prix_seul = isset($_POST['prix_seul']) ? $_POST['prix_seul'] : null;
    $prix_menu = isset($_POST['prix_menu']) ? $_POST['prix_menu'] : null;
    $prix_1viande = isset($_POST['prix_1viande']) ? $_POST['prix_1viande'] : null;
    $prix_2viandes = isset($_POST['prix_2viandes']) ? $_POST['prix_2viandes'] : null;
    $prix_3viandes = isset($_POST['prix_3viandes']) ? $_POST['prix_3viandes'] : null;

    try {
        $stmt = $conn->prepare("
            UPDATE Prix 
            SET prix_seul = :prix_seul, prix_menu = :prix_menu, 
                prix_1viande = :prix_1viande, prix_2viandes = :prix_2viandes, prix_3viandes = :prix_3viandes 
            WHERE id_prix = :id_prix
        ");
        $stmt->bindParam(':id_prix', $id_prix);
        $stmt->bindParam(':prix_seul', $prix_seul);
        $stmt->bindParam(':prix_menu', $prix_menu);
        $stmt->bindParam(':prix_1viande', $prix_1viande);
        $stmt->bindParam(':prix_2viandes', $prix_2viandes);
        $stmt->bindParam(':prix_3viandes', $prix_3viandes);
        $stmt->execute();
        echo "Les prix ont été mis à jour avec succès.";
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier les Prix</title>
    <link rel="stylesheet" type="text/css" href="../Style/modifier.css">
    <link rel="icon" href="../img/logosnack.png" type="image/png">
</head>
<body>
<a href="deconnexion.php" class="deconnexion-btn">Déconnexion</a>
    <h2>MODIFIER LES PRIX</h2>
    
    <div class="themes-container">
        <div class="theme">
            <h3>LES BURGERS</h3>
            <?php
            try {
                $stmt = $conn->query("
                    SELECT Food.id_food, Food.nom_food, Prix.id_prix, Prix.prix_seul, Prix.prix_menu 
                    FROM Food 
                    JOIN Coûter ON Food.id_food = Coûter.id_food 
                    JOIN Prix ON Coûter.id_prix = Prix.id_prix 
                    WHERE Food.id_food BETWEEN 1 AND 5
                ");
                $burgers = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($burgers as $row) {
                    echo "<form method='post' action='modifier.php'>";
                    echo "<div class='burger-entry'>";
                    echo "<h4>" . htmlspecialchars($row['nom_food']) . "</h4>";
                    echo "<input type='hidden' name='id_prix' value='" . htmlspecialchars($row['id_prix']) . "'>";
                    echo "<label>Prix Seul: <input type='text' name='prix_seul' value='" . htmlspecialchars($row['prix_seul']) . "'></label>";
                    echo "<label>Prix Menu: <input type='text' name='prix_menu' value='" . htmlspecialchars($row['prix_menu']) . "'></label>";
                    echo "<button type='submit'>Modifier</button>";
                    echo "</div><hr>";
                    echo "</form>";
                }
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
            ?>
        </div>

        <div class="theme">
            <h3>LES CLASSIQUES</h3>
            <?php
            try {
                $stmt = $conn->query("
                    SELECT Food.id_food, Food.nom_food, Prix.id_prix, Prix.prix_seul, Prix.prix_menu 
                    FROM Food 
                    JOIN Coûter ON Food.id_food = Coûter.id_food 
                    JOIN Prix ON Coûter.id_prix = Prix.id_prix 
                    WHERE Food.id_food BETWEEN 6 AND 10
                ");
                $classiques = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($classiques as $row) {
                    echo "<form method='post' action='modifier.php'>";
                    echo "<div class='burger-entry'>";
                    echo "<h4>" . htmlspecialchars($row['nom_food']) . "</h4>";
                    echo "<input type='hidden' name='id_prix' value='" . htmlspecialchars($row['id_prix']) . "'>";
                    echo "<label>Prix Seul: <input type='text' name='prix_seul' value='" . htmlspecialchars($row['prix_seul']) . "'></label>";
                    echo "<label>Prix Menu: <input type='text' name='prix_menu' value='" . htmlspecialchars($row['prix_menu']) . "'></label>";
                    echo "<button type='submit'>Modifier</button>";
                    echo "</div><hr>";
                    echo "</form>";
                }
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
            ?>
        </div>

        <div class="theme">
            <h3>LES COMPOSITIONS</h3>
            <?php
            try {
                $stmt = $conn->query("
                    SELECT Food.id_food, Food.nom_food, Prix.id_prix, Prix.prix_1viande, Prix.prix_2viandes, Prix.prix_3viandes 
                    FROM Food 
                    JOIN Coûter ON Food.id_food = Coûter.id_food 
                    JOIN Prix ON Coûter.id_prix = Prix.id_prix 
                    WHERE Food.id_food BETWEEN 11 AND 14
                ");
                $compositions = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($compositions as $row) {
                    echo "<form method='post' action='modifier.php'>";
                    echo "<div class='burger-entry'>";
                    echo "<h4>" . htmlspecialchars($row['nom_food']) . "</h4>";
                    echo "<input type='hidden' name='id_prix' value='" . htmlspecialchars($row['id_prix']) . "'>";
                    echo "<label>Prix 1 Viande: <input type='text' name='prix_1viande' value='" . htmlspecialchars($row['prix_1viande']) . "'></label>";
                    echo "<label>Prix 2 Viandes: <input type='text' name='prix_2viandes' value='" . htmlspecialchars($row['prix_2viandes']) . "'></label>";
                    echo "<label>Prix 3 Viandes: <input type='text' name='prix_3viandes' value='" . htmlspecialchars($row['prix_3viandes']) . "'></label>";
                    echo "<button type='submit'>Modifier</button>";
                    echo "</div><hr>";
                    echo "</form>";
                }
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
            ?>
            <?php
            try {
                $stmt = $conn->query("
                    SELECT Food.id_food, Food.nom_food, Prix.id_prix, Prix.prix_seul, Prix.prix_menu 
                    FROM Food 
                    JOIN Coûter ON Food.id_food = Coûter.id_food 
                    JOIN Prix ON Coûter.id_prix = Prix.id_prix 
                    WHERE Food.id_food = 15
                ");
                $carbonnade = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($carbonnade as $row) {
                    echo "<form method='post' action='modifier.php'>";
                    echo "<div class='burger-entry'>";
                    echo "<h4>" . htmlspecialchars($row['nom_food']) . "</h4>";
                    echo "<input type='hidden' name='id_prix' value='" . htmlspecialchars($row['id_prix']) . "'>";
                    echo "<label>Prix Seul: <input type='text' name='prix_seul' value='" . htmlspecialchars($row['prix_seul']) . "'></label>";
                    echo "<label>Prix Menu: <input type='text' name='prix_menu' value='" . htmlspecialchars($row['prix_menu']) . "'></label>";
                    echo "<button type='submit'>Modifier</button>";
                    echo "</div><hr>";
                    echo "</form>";
                }
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
            ?>
        </div>
    </div>
</body>
</html>

