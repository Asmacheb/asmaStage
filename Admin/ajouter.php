<?php
// include '../Admin/database.php';

// $conn = getDatabaseConnection();

// try {
   
//     $columns = [
//         'prix_seul' => "DECIMAL(10, 2) NULL",
//         'prix_menu' => "DECIMAL(10, 2) NULL",
//         'prix_1viande' => "DECIMAL(10, 2) NULL",
//         'prix_2viandes' => "DECIMAL(10, 2) NULL",
//         'prix_3viandes' => "DECIMAL(10, 2) NULL"
//     ];
    
//     foreach ($columns as $column => $definition) {
//         $result = $conn->query("SHOW COLUMNS FROM Prix LIKE '$column'");
//         if ($result->rowCount() == 0) {
//             $conn->exec("ALTER TABLE Prix ADD COLUMN $column $definition");
//         }
//     }

   
//     $burgers = [
//         ['nom_food' => 'BURGER SIMPLE', 'prix_seul' => 6.50, 'prix_menu' => 9.00],
//         ['nom_food' => 'FISH BURGER', 'prix_seul' => 6.50, 'prix_menu' => 9.00],
//         ['nom_food' => 'SMASH BURGER', 'prix_seul' => 6.50, 'prix_menu' => 9.00],
//         ['nom_food' => 'CHICKEN BURGER', 'prix_seul' => 6.50, 'prix_menu' => 9.00],
//         ['nom_food' => 'ROYAL BURGER', 'prix_seul' => 6.50, 'prix_menu' => 9.00],
//     ];

//     foreach ($burgers as $burger) {
//         $stmt = $conn->prepare("INSERT INTO Prix (prix_seul, prix_menu) VALUES (?, ?)");
//         $stmt->execute([$burger['prix_seul'], $burger['prix_menu']]);
//         $id_prix = $conn->lastInsertId();

//         $stmt = $conn->prepare("SELECT id_food FROM Food WHERE nom_food = ?");
//         $stmt->execute([$burger['nom_food']]);
//         $id_food = $stmt->fetchColumn();

//         $stmt = $conn->prepare("INSERT INTO Coûter (id_food, id_prix) VALUES (?, ?)");
//         $stmt->execute([$id_food, $id_prix]);
//     }

//     $classiques = [
//         ['nom_food' => 'KEBAB', 'prix_seul' => 6.50, 'prix_menu' => 9.00],
//         ['nom_food' => 'GALETTE', 'prix_seul' => 6.50, 'prix_menu' => 9.00],
//         ['nom_food' => 'PANINI', 'prix_seul' => 6.50, 'prix_menu' => 9.00],
//         ['nom_food' => 'SANDWICH', 'prix_seul' => 6.50, 'prix_menu' => 9.00],
//         ['nom_food' => 'MENU ENFANT', 'prix_seul' => 6.50, 'prix_menu' => 9.00],
//     ];

//     foreach ($classiques as $classique) {
//         $stmt = $conn->prepare("INSERT INTO Prix (prix_seul, prix_menu) VALUES (?, ?)");
//         $stmt->execute([$classique['prix_seul'], $classique['prix_menu']]);
//         $id_prix = $conn->lastInsertId();

//         $stmt = $conn->prepare("SELECT id_food FROM Food WHERE nom_food = ?");
//         $stmt->execute([$classique['nom_food']]);
//         $id_food = $stmt->fetchColumn();

//         $stmt = $conn->prepare("INSERT INTO Coûter (id_food, id_prix) VALUES (?, ?)");
//         $stmt->execute([$id_food, $id_prix]);
//     }

    
//     $compositions = [
//         ['nom_food' => 'TACOS', 'prix_1viande' => 6.50, 'prix_2viandes' => 9.00, 'prix_3viandes' => 12.00],
//         ['nom_food' => 'TACOSBOWL', 'prix_1viande' => 6.50, 'prix_2viandes' => 9.00, 'prix_3viandes' => 12.00],
//         ['nom_food' => 'ASSIETTE', 'prix_1viande' => 6.50, 'prix_2viandes' => 9.00, 'prix_3viandes' => 12.00],
//         ['nom_food' => 'KAPSALON', 'prix_1viande' => 6.50, 'prix_2viandes' => 9.00, 'prix_3viandes' => 12.00],
//         ['nom_food' => 'CARBONNADE', 'prix_1viande' => 6.50, 'prix_2viandes' => 9.00, 'prix_3viandes' => 12.00],
//     ];

//     foreach ($compositions as $composition) {
//         $stmt = $conn->prepare("INSERT INTO Prix (prix_1viande, prix_2viandes, prix_3viandes) VALUES (?, ?, ?)");
//         $stmt->execute([$composition['prix_1viande'], $composition['prix_2viandes'], $composition['prix_3viandes']]);
//         $id_prix = $conn->lastInsertId();

//         $stmt = $conn->prepare("SELECT id_food FROM Food WHERE nom_food = ?");
//         $stmt->execute([$composition['nom_food']]);
//         $id_food = $stmt->fetchColumn();

//         $stmt = $conn->prepare("INSERT INTO Coûter (id_food, id_prix) VALUES (?, ?)");
//         $stmt->execute([$id_food, $id_prix]);
//     }

//     echo "Les prix ont été mis à jour avec succès.";
// } catch (PDOException $e) {
//     echo "Erreur : " . $e->getMessage();
// }

// $conn = null;
?>

