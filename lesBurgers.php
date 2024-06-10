<?php
require_once 'database.php';
$conn = getDatabaseConnection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burgers</title>
    <link rel="stylesheet" type="text/css" href="burger.css">
</head>
<body>
<?php require_once 'menu.php'; ?> 
    <!-- BURGER SIMPLE -->
    <div class="backSimple" id="burgersimple">
    <div class="titre2">
        <div class="h2Second">
       <div class="h2"> <h2 id="burger_simple">BURGER SIMPLE</h2></div>
       <div class="description2"> <p> Pain burger, un steack, salade, tomate, cheddar, sauce au choix.</p></div>
      </div>
      <div class="responsiveSimple"><img src="img/imgsimple.png" alt="burger simple"></div>
      <div class="prix-container2">
      <div class="prix2">
      <?php
                    try {
                        $stmt = $conn->prepare("
                            SELECT Prix.prix_seul, Prix.prix_menu 
                            FROM Prix 
                            JOIN Coûter ON Prix.id_prix = Coûter.id_prix 
                            JOIN Food ON Coûter.id_food = Food.id_food 
                            WHERE Food.nom_food = 'BURGER SIMPLE'
                        ");
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    } catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }
                    ?>
                    <div class="option">
                        <span>SEUL</span>
                        <p><?php echo htmlspecialchars($row['prix_seul']) . "€"; ?></p>
                    </div>
                    <div class="option">
                        <span>MENU</span>
                        <p><?php echo htmlspecialchars($row['prix_menu']) . "€"; ?></p>
                    </div>
                </div>
            </div>
        </div>
 <div class="titresupp2">
   <div class="h2supp2"><h2>SUPPLÉMENTS</h2></div>
    <div class="suppléments2">
        <div class="item">
            <img src="img/chevre.png" alt="Fromage de Chèvre">
            <span class="label">Chèvre</span>
            </div>
            <div class="item">
            <img src="img/pdt.png" alt="Galette de pomme de terre">
            <span class="label">Galette Pdt</span>
            </div>
            <div class="item">
            <img src="img/jambon.png" alt="Jamdon dinde">
            <span class="label">Jamdon dinde</span>
            </div>
            <div class="item">
            <img src="img/oeuf.png" alt="Oeuf">
            <span class="label">Oeuf</span>
            </div>
            <div class="item">
            <img src="img/cheddar.png" alt="Cheddar">
            <span class="label">Cheddar</span>
            </div>
            <div class="item">
            <img src="img/raclette.png" alt=" Fromage de Raclette">
            <span class="label">Raclette</span>
            </div>
            <div class="item">
            <img src="img/salami.png" alt="Salami">
            <span class="label">Salami</span>
            </div>
            <div class="item">
            <img src="img/ring.png" alt="Oignons rings">
            <span class="label">Oignons rings</span>
            </div>
            
        
    </div>
    <div class="optionsupp2">
        <span>2 Suppléments</span>
        <p>1.50€</p>
    </div>
</div>
</div>
    </div>

    <!-- BURGER FISH -->

    <div class="backFish" id="fishburger">
        <div class="titre2">
            <div class="h2Second">
           <div class="h2"> <h2>FISH BURGER</h2></div>
           <div class="description2"> <p> Pain burger, poisson pané, salade, tomate, cheddar, sauce au choix.</p></div>
           </div>
           <div class="responsiveFish"><img src="img/imgfish.png" alt="fish burger"></div>
          <div class="prix-container2">
          <div class="prix2">
          <?php
                    try {
                        $stmt = $conn->prepare("
                            SELECT Prix.prix_seul, Prix.prix_menu 
                            FROM Prix 
                            JOIN Coûter ON Prix.id_prix = Coûter.id_prix 
                            JOIN Food ON Coûter.id_food = Food.id_food 
                            WHERE Food.nom_food = 'FISH BURGER'
                        ");
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    } catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }
                    ?>
                    <div class="option">
                        <span>SEUL</span>
                        <p><?php echo htmlspecialchars($row['prix_seul']) . "€"; ?></p>
                    </div>
                    <div class="option">
                        <span>MENU</span>
                        <p><?php echo htmlspecialchars($row['prix_menu']) . "€"; ?></p>
                    </div>
                </div>
            </div>
        </div>
     <div class="titresupp2">
       <div class="h2supp2"><h2>SUPPLÉMENTS</h2></div>
        <div class="suppléments2">
            <div class="item">
                <img src="img/chevre.png" alt="Fromage de Chèvre">
                <span class="label">Chèvre</span>
                </div>
                <div class="item">
                <img src="img/pdt.png" alt="Galette de pomme de terre">
                <span class="label">Galette Pdt</span>
                </div>
                <div class="item">
                <img src="img/jambon.png" alt="Jamdon dinde">
                <span class="label">Jamdon dinde</span>
                </div>
                <div class="item">
                <img src="img/oeuf.png" alt="Oeuf">
                <span class="label">Oeuf</span>
                </div>
                <div class="item">
                <img src="img/cheddar.png" alt="Cheddar">
                <span class="label">Cheddar</span>
                </div>
                <div class="item">
                <img src="img/raclette.png" alt=" Fromage de Raclette">
                <span class="label">Raclette</span>
                </div>
                <div class="item">
                <img src="img/salami.png" alt="Salami">
                <span class="label">Salami</span>
                </div>
                <div class="item">
                <img src="img/ring.png" alt="Oignons rings">
                <span class="label">Oignons rings</span>
                </div>
            
        </div>
        <div class="optionsupp2">
            <span>2 Suppléments</span>
            <p>1.50€</p>
        </div>
    </div>
    </div>
    
    
        </div>
    <!-- BURGER SMASH -->
    <div class="backSmash" id="smashburger">
        <div class="titre2">
            <div class="h2Second">
           <div class="h2"> <h2>SMASH BURGER</h2></div>
           <div class="description2"> <p> Pain brioché, deux steacks ou un filet de poulet , salade, tomate, cheddar, sauce au choix.</p></div>
           </div>
           <div class="responsiveSmash"><img src="img/imgsmash.png" alt="smash burger"></div>
          <div class="prix-container2">
          <div class="prix2">
          <?php
                    try {
                        $stmt = $conn->prepare("
                            SELECT Prix.prix_seul, Prix.prix_menu 
                            FROM Prix 
                            JOIN Coûter ON Prix.id_prix = Coûter.id_prix 
                            JOIN Food ON Coûter.id_food = Food.id_food 
                            WHERE Food.nom_food = 'SMASH BURGER'
                        ");
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    } catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }
                    ?>
                    <div class="option">
                        <span>SEUL</span>
                        <p><?php echo htmlspecialchars($row['prix_seul']) . "€"; ?></p>
                    </div>
                    <div class="option">
                        <span>MENU</span>
                        <p><?php echo htmlspecialchars($row['prix_menu']) . "€"; ?></p>
                    </div>
                </div>
            </div>
        </div>
     <div class="titresupp2">
       <div class="h2supp2"><h2>SUPPLÉMENTS</h2></div>
        <div class="suppléments2">
            <div class="item">
                <img src="img/chevre.png" alt="Fromage de Chèvre">
                <span class="label">Chèvre</span>
                </div>
                <div class="item">
                <img src="img/pdt.png" alt="Galette de pomme de terre">
                <span class="label">Galette Pdt</span>
                </div>
                <div class="item">
                <img src="img/jambon.png" alt="Jamdon dinde">
                <span class="label">Jamdon dinde</span>
                </div>
                <div class="item">
                <img src="img/oeuf.png" alt="Oeuf">
                <span class="label">Oeuf</span>
                </div>
                <div class="item">
                <img src="img/cheddar.png" alt="Cheddar">
                <span class="label">Cheddar</span>
                </div>
                <div class="item">
                <img src="img/raclette.png" alt=" Fromage de Raclette">
                <span class="label">Raclette</span>
                </div>
                <div class="item">
                <img src="img/salami.png" alt="Salami">
                <span class="label">Salami</span>
                </div>
                <div class="item">
                <img src="img/ring.png" alt="Oignons rings">
                <span class="label">Oignons rings</span>
                </div>
        </div>
        <div class="optionsupp2">
            <span>2 Suppléments</span>
            <p>1.50€</p>
        </div>
    </div>
    </div>
    
    
        </div>
    <!-- BURGER CHICKEN -->
    <div class="backChicken" id="chickenburger">
        <div class="titre2">
            <div class="h2Second">
           <div class="h2"> <h2>CHICKEN BURGER</h2></div>
           <div class="description2"> <p> Pain burger, un steack, salade, tomate, cheddar, sauce au choix.</p></div>
          </div>
          <div class="responsiveChicken"><img src="img/imgchicken.png" alt="chicken burger"></div>
          <div class="prix-container2">
          <div class="prix2">
          <?php
                    try {
                        $stmt = $conn->prepare("
                            SELECT Prix.prix_seul, Prix.prix_menu 
                            FROM Prix 
                            JOIN Coûter ON Prix.id_prix = Coûter.id_prix 
                            JOIN Food ON Coûter.id_food = Food.id_food 
                            WHERE Food.nom_food = 'CHICKEN BURGER'
                        ");
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    } catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }
                    ?>
                    <div class="option">
                        <span>SEUL</span>
                        <p><?php echo htmlspecialchars($row['prix_seul']) . "€"; ?></p>
                    </div>
                    <div class="option">
                        <span>MENU</span>
                        <p><?php echo htmlspecialchars($row['prix_menu']) . "€"; ?></p>
                    </div>
                </div>
            </div>
        </div>
     <div class="titresupp2">
       <div class="h2supp2"><h2>SUPPLÉMENTS</h2></div>
        <div class="suppléments2">
            <div class="item">
                <img src="img/chevre.png" alt="Fromage de Chèvre">
                <span class="label">Chèvre</span>
                </div>
                <div class="item">
                <img src="img/pdt.png" alt="Galette de pomme de terre">
                <span class="label">Galette Pdt</span>
                </div>
                <div class="item">
                <img src="img/jambon.png" alt="Jamdon dinde">
                <span class="label">Jamdon dinde</span>
                </div>
                <div class="item">
                <img src="img/oeuf.png" alt="Oeuf">
                <span class="label">Oeuf</span>
                </div>
                <div class="item">
                <img src="img/cheddar.png" alt="Cheddar">
                <span class="label">Cheddar</span>
                </div>
                <div class="item">
                <img src="img/raclette.png" alt=" Fromage de Raclette">
                <span class="label">Raclette</span>
                </div>
                <div class="item">
                <img src="img/salami.png" alt="Salami">
                <span class="label">Salami</span>
                </div>
                <div class="item">
                <img src="img/ring.png" alt="Oignons rings">
                <span class="label">Oignons rings</span>
                </div>
                
        </div>
        <div class="optionsupp2">
            <span>2 Suppléments</span>
            <p>1.50€</p>
        </div>
    </div>
    </div>
    
    
        </div>
    <!-- BURGER ROYAL -->
    <div class="backRoyal" id="royalburger">
        <div class="titre2">
            <div class="h2Second">
           <div class="h2"> <h2>ROYAL BURGER</h2></div>
           <div class="description2"> <p> Pain burger, un steack, salade, tomate, cheddar, sauce au choix.</p></div>
          </div>
          <div class="responsiveRoyal"><img src="img/imgroyal.png" alt="burger royal"></div>
          <div class="prix-container2">
          <div class="prix2">
          <?php
                    try {
                        $stmt = $conn->prepare("
                            SELECT Prix.prix_seul, Prix.prix_menu 
                            FROM Prix 
                            JOIN Coûter ON Prix.id_prix = Coûter.id_prix 
                            JOIN Food ON Coûter.id_food = Food.id_food 
                            WHERE Food.nom_food = 'ROYAL BURGER'
                        ");
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    } catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }
                    ?>
                    <div class="option">
                        <span>SEUL</span>
                        <p><?php echo htmlspecialchars($row['prix_seul']) . "€"; ?></p>
                    </div>
                    <div class="option">
                        <span>MENU</span>
                        <p><?php echo htmlspecialchars($row['prix_menu']) . "€"; ?></p>
                    </div>
                </div>
            </div>
        </div>
     <div class="titresupp2">
       <div class="h2supp2"><h2>SUPPLÉMENTS</h2></div>
        <div class="suppléments2">
            <div class="item">
                <img src="img/chevre.png" alt="Fromage de Chèvre">
                <span class="label">Chèvre</span>
                </div>
                <div class="item">
                <img src="img/pdt.png" alt="Galette de pomme de terre">
                <span class="label">Galette Pdt</span>
                </div>
                <div class="item">
                <img src="img/jambon.png" alt="Jamdon dinde">
                <span class="label">Jamdon dinde</span>
                </div>
                <div class="item">
                <img src="img/oeuf.png" alt="Oeuf">
                <span class="label">Oeuf</span>
                </div>
                <div class="item">
                <img src="img/cheddar.png" alt="Cheddar">
                <span class="label">Cheddar</span>
                </div>
                <div class="item">
                <img src="img/raclette.png" alt=" Fromage de Raclette">
                <span class="label">Raclette</span>
                </div>
                <div class="item">
                <img src="img/salami.png" alt="Salami">
                <span class="label">Salami</span>
                </div>
                <div class="item">
                <img src="img/ring.png" alt="Oignons rings">
                <span class="label">Oignons rings</span>
                </div>
                
            
        </div>
        <div class="optionsupp2">
            <span>2 Suppléments</span>
            <p>1.50€</p>
        </div>
    </div>
    </div>
        </div>
        
</body>
</html>

