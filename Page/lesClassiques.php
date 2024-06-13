<?php
require_once '../Admin/database.php';
$conn = getDatabaseConnection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classiques</title>
    <link rel="stylesheet" type="text/css" href="../Style/classique.css">
</head>
<body>
<?php require_once '../menu.php'; ?> 
<!-- KEBAB -->
    <div class="backKebab" id="kebab">
    <div class="titre2">
        <div class="h2Second">
       <div class="h2"> <h2>KEBAB</h2></div>
       <div class="description2"> <p> Faluche, viande kebab, salade, tomate, sauce au choix.</p></div>
      </div>
      <div class="responsiveKebab"><img src="../img/imgkebab.png" alt="kebab"></div>
      <div class="prix-container2">
      <div class="prix2">
      <?php
                    try {
                        $stmt = $conn->prepare("
                            SELECT Prix.prix_seul, Prix.prix_menu 
                            FROM Prix 
                            JOIN Coûter ON Prix.id_prix = Coûter.id_prix 
                            JOIN Food ON Coûter.id_food = Food.id_food 
                            WHERE Food.nom_food = 'KEBAB'
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
            <img src="../img/chevre.png" alt="Fromage de Chèvre">
            <span class="label">Chèvre</span>
            </div>
            <div class="item">
            <img src="../img/pdt.png" alt="Galette de pomme de terre">
            <span class="label">Galette Pdt</span>
            </div>
            <div class="item">
            <img src="../img/jambon.png" alt="Jamdon dinde">
            <span class="label">Jamdon dinde</span>
            </div>
            <div class="item">
            <img src="../img/oeuf.png" alt="Oeuf">
            <span class="label">Oeuf</span>
            </div>
            <div class="item">
            <img src="../img/cheddar.png" alt="Cheddar">
            <span class="label">Cheddar</span>
            </div>
            <div class="item">
            <img src="../img/raclette.png" alt=" Fromage de Raclette">
            <span class="label">Raclette</span>
            </div>
            <div class="item">
            <img src="../img/salami.png" alt="Salami">
            <span class="label">Salami</span>
            </div>
            <div class="item">
            <img src="../img/ring.png" alt="Oignons rings">
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

    <!-- GALETTE -->
    <div class="backGalette" id="galette"> 
        <div class="titre1">
            <div class="h2Premier">
           <div class="h2"> <h2>GALETTE</h2></div>
           <div class="description1"> <p> Pain galette, viande au choix, salade, tomate, sauce au choix.</p></div>
          </div>
          <div class="responsiveGalette"><img src="../img/imggalette.png" alt="galette"></div>
          <div class="prix-container1">
          <div class="prix1">
          <?php
                    try {
                        $stmt = $conn->prepare("
                            SELECT Prix.prix_seul, Prix.prix_menu 
                            FROM Prix 
                            JOIN Coûter ON Prix.id_prix = Coûter.id_prix 
                            JOIN Food ON Coûter.id_food = Food.id_food 
                            WHERE Food.nom_food = 'GALETTE'
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
     <div class="titresupp1">
        <div class="h2viande"><h2>VIANDE AUX CHOIX</h2></div>
        <div class="viandes">
            <div class="item">
                <img src="../img/viandekebab.png" alt="kebab">
                <span class="label">Kebab</span>
                </div>
                <div class="item">
                <img src="../img/viandekefta.png" alt="viande hachés">
                <span class="label">Viande Hachés</span>
                </div>
                <div class="item">
                <img src="../img/viandedinde.png" alt="Dinde">
                <span class="label">Dinde marinée</span>
                </div>
                <div class="item">
                <img src="../img/viandeboeuf.png" alt="Boeuf">
                <span class="label">Boeuf marinée</span>
                </div>
                <div class="item">
                <img src="../img/viandemerguez.png" alt="Merguez">
                <span class="label">Merguez</span>
                </div>
                <div class="item">
                <img src="../img/viandenuggets.png" alt="Nuggets">
                <span class="label">Nuggets</span>
                </div>
                <div class="item">
                <img src="../img/viandecordonbleu.png" alt="Cordon bleu">
                <span class="label">Cordon Bleu</span>
                </div>
                <div class="item">
                <img src="../img/viandetenders.png" alt="Tenders">
                <span class="label">Tenders</span>
                </div>
            
        </div>
    
    
    
       <div class="h2supp1"><h2>SUPPLÉMENTS</h2></div>
        <div class="suppléments1">
            <div class="item">
                <img src="img/chevre.png" alt="Fromage de Chèvre">
                <span class="label">Chèvre</span>
                </div>
                <div class="item">
                <img src="../img/pdt.png" alt="Galette de pomme de terre">
                <span class="label">Galette Pdt</span>
                </div>
                <div class="item">
                <img src="../img/jambon.png" alt="Jamdon dinde">
                <span class="label">Jamdon dinde</span>
                </div>
                <div class="item">
                <img src="../img/oeuf.png" alt="Oeuf">
                <span class="label">Oeuf</span>
                </div>
                <div class="item">
                <img src="../img/cheddar.png" alt="Cheddar">
                <span class="label">Cheddar</span>
                </div>
                <div class="item">
                <img src="../img/raclette.png" alt=" Fromage de Raclette">
                <span class="label">Raclette</span>
                </div>
                <div class="item">
                <img src="../img/salami.png" alt="Salami">
                <span class="label">Salami</span>
                </div>
                <div class="item">
                <img src="../img/ring.png" alt="Oignons rings">
                <span class="label">Oignons rings</span>
                </div>
        </div>
        <div class="optionsupp1">
            <span>2 Suppléments</span>
            <p>1.50€</p>
        </div>
    </div>
    </div>
    
    
        </div>
    <!-- PANINI -->
    <div class="backPanini" id="panini">
        <div class="titre1">
            <div class="h2Premier">
           <div class="h2"> <h2>PANINI</h2></div>
           <div class="description1"> <p> Pain panini, viande au choix, fromage,  salade, tomate, sauce au choix.</p></div>
          </div>
          <div class="responsivePanini"><img src="../img/imgpanini.png" alt="panini"></div>
          <div class="prix-container1">
          <div class="prix1">
                    <?php
                     try {
                         $stmt = $conn->prepare("
                             SELECT Prix.prix_seul, Prix.prix_menu 
                             FROM Prix 
                             JOIN Coûter ON Prix.id_prix = Coûter.id_prix 
                             JOIN Food ON Coûter.id_food = Food.id_food 
                             WHERE Food.nom_food = 'PANINI'
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
     <div class="titresupp1">
        <div class="h2viande"><h2>VIANDE AUX CHOIX</h2></div>
        <div class="viandes">
            <div class="item">
                <img src="../img/viandekebab.png" alt="kebab">
                <span class="label">Kebab</span>
                </div>
                <div class="item">
                <img src="../img/viandekefta.png" alt="viande hachés">
                <span class="label">Viande Hachés</span>
                </div>
                <div class="item">
                <img src="../img/viandedinde.png" alt="Dinde">
                <span class="label">Dinde marinée</span>
                </div>
                <div class="item">
                <img src="../img/viandeboeuf.png" alt="Boeuf">
                <span class="label">Boeuf marinée</span>
                </div>
                <div class="item">
                <img src="../img/viandemerguez.png" alt="Merguez">
                <span class="label">Merguez</span>
                </div>
                <div class="item">
                <img src="../img/viandenuggets.png" alt="Nuggets">
                <span class="label">Nuggets</span>
                </div>
                <div class="item">
                <img src="../img/viandecordonbleu.png" alt="Cordon bleu">
                <span class="label">Cordon Bleu</span>
                </div>
                <div class="item">
                <img src="../img/viandetenders.png" alt="Tenders">
                <span class="label">Tenders</span>
                </div>
            
        </div>
    
    
    
       <div class="h2supp1"><h2>SUPPLÉMENTS</h2></div>
        <div class="suppléments1">
            <div class="item">
                <img src="../img/chevre.png" alt="Fromage de Chèvre">
                <span class="label">Chèvre</span>
                </div>
                <div class="item">
                <img src="../img/pdt.png" alt="Galette de pomme de terre">
                <span class="label">Galette Pdt</span>
                </div>
                <div class="item">
                <img src="../img/jambon.png" alt="Jamdon dinde">
                <span class="label">Jamdon dinde</span>
                </div>
                <div class="item">
                <img src="../img/oeuf.png" alt="Oeuf">
                <span class="label">Oeuf</span>
                </div>
                <div class="item">
                <img src="../img/cheddar.png" alt="Cheddar">
                <span class="label">Cheddar</span>
                </div>
                <div class="item">
                <img src="../img/raclette.png" alt=" Fromage de Raclette">
                <span class="label">Raclette</span>
                </div>
                <div class="item">
                <img src="../img/salami.png" alt="Salami">
                <span class="label">Salami</span>
                </div>
                <div class="item">
                <img src="../img/ring.png" alt="Oignons rings">
                <span class="label">Oignons rings</span>
                </div>
            
        </div>
        <div class="optionsupp1">
            <span>2 Suppléments</span>
            <p>1.50€</p>
        </div>
    </div>
     </div>
     </div>

    <!-- SANDWICH -->
    <div class="backSandwich" id="sandwich">
        <div class="titresandwich">
            <div class="h2sandwich">
           <div class="h2"> <h2>SANDWICH</h2></div>
           <div class="descriptionSandwich"> <p> Pain baguette, viande au choix,  salade, tomate, sauce au choix.</p></div>
          </div>
          <div class="flex">
          <div class="responsiveSandwich"><img src="../img/imgsandwich.png" alt="sandwich"></div>
          <div class="prix-containerSandwich">
          <div class="prixSandwich">
          <?php
                    try {
                        $stmt = $conn->prepare("
                            SELECT Prix.prix_seul, Prix.prix_menu 
                            FROM Prix 
                            JOIN Coûter ON Prix.id_prix = Coûter.id_prix 
                            JOIN Food ON Coûter.id_food = Food.id_food 
                            WHERE Food.nom_food = 'SANDWICH'
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
        </div>
        <div class="titresuppSandwich">
        <div class="sectiontotal">
            <div class="sectionchaud">
                <div class="h2chaud"><h2>CHAUD</h2></div>
                <div class="sandwichchaud">
                    <p>Méxicanos</p>
                    <p>Fricadelles</p>
                    <p>Tenders</p>
                    <p>Nuggets</p>
                    <p>Croque monsieur</p>
                    <p>Frites omelettes (4€)</p>
                    <p>Cordon Bleu (4€)</p>    
                </div>
            </div>
        
            <div class="sectionfroid">
                <div class="h2froid"><h2>FROID</h2></div>
                <div class="sandwichfroid">
                    <p>Thon mayo</p>
                    <p>Poulet mayo</p>
                    <p>Poulet andalouse</p>
                    <p>Poulet curry</p>
                    <p>Crabe</p>
                    <p>Fromage</p>
                    <p>Filet américain (4€)</p>    
                </div>
            </div>
       
        </div>
        <!-- <div class="optionsupp">
            <span>2 Suppléments</span>
            <p>1.50€</p>
        </div> -->
        <div class="cotée2">
        <div class="h2suppSandwich"><h2>SUPPLÉMENTS</h2></div>
        <div class="supplémentsSandwich">
            <div class="item">
                <img src="../img/chevre.png" alt="Fromage de Chèvre">
                <span class="label">Chèvre</span>
                </div>
                <div class="item">
                <img src="../img/pdt.png" alt="Galette de pomme de terre">
                <span class="label">Galette Pdt</span>
                </div>
                <div class="item">
                <img src="../img/jambon.png" alt="Jamdon dinde">
                <span class="label">Jamdon dinde</span>
                </div>
                <div class="item">
                <img src="../img/oeuf.png" alt="Oeuf">
                <span class="label">Oeuf</span>
                </div>
                <div class="item">
                <img src="../img/cheddar.png" alt="Cheddar">
                <span class="label">Cheddar</span>
                </div>
                <div class="item">
                <img src="../img/raclette.png" alt=" Fromage de Raclette">
                <span class="label">Raclette</span>
                </div>
                <div class="item">
                <img src="../img/salami.png" alt="Salami">
                <span class="label">Salami</span>
                </div>
                <div class="item">
                <img src="../img/ring.png" alt="Oignons rings">
                <span class="label">Oignons rings</span>
                </div>
                
        </div>
        <div class="optionsuppSandwich">
            <span>2 Suppléments</span>
            <p>1.50€</p>
        </div>
    </div>
    
    </div>
    
    </div>
    </div>
    
    
        </div>
    <!-- MENU ENFANT -->
    <div class="backEnfant" id="enfant">
        <div class="titre3">
            <div class="h2Second">
           <div class="h2"> <h2>MENU ENFANT</h2></div>
           <div class="description2"> <p> Pain burger, un steack, cheddar, sauce au choix.</p></div>
          </div>
          <div class="responsiveEnfant"><img src="../img/imgmenuenfant.png" alt="menu enfant"></div>
          <div class="prix-container3">
          <div class="prix3">
          <?php
                    try {
                        $stmt = $conn->prepare("
                            SELECT Prix.prix_seul, Prix.prix_menu 
                            FROM Prix 
                            JOIN Coûter ON Prix.id_prix = Coûter.id_prix 
                            JOIN Food ON Coûter.id_food = Food.id_food 
                            WHERE Food.nom_food = 'MENU ENFANT'
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
     <div class="titresupp3">
       <div class="h2supp3"><h2>SUPPLÉMENTS</h2></div>
        <div class="suppléments3">
            <div class="item">
                <img src="../img/chevre.png" alt="Fromage de Chèvre">
                <span class="label">Chèvre</span>
                </div>
                <div class="item">
                <img src="../img/pdt.png" alt="Galette de pomme de terre">
                <span class="label">Galette Pdt</span>
                </div>
                <div class="item">
                <img src="../img/jambon.png" alt="Jamdon dinde">
                <span class="label">Jamdon dinde</span>
                </div>
                <div class="item">
                <img src="../img/oeuf.png" alt="Oeuf">
                <span class="label">Oeuf</span>
                </div>
                <div class="item">
                <img src="../img/cheddar.png" alt="Cheddar">
                <span class="label">Cheddar</span>
                </div>
                <div class="item">
                <img src="../img/raclette.png" alt=" Fromage de Raclette">
                <span class="label">Raclette</span>
                </div>
                <div class="item">
                <img src="../img/salami.png" alt="Salami">
                <span class="label">Salami</span>
                </div>
                <div class="item">
                <img src="../img/ring.png" alt="Oignons rings">
                <span class="label">Oignons rings</span>
                </div>
        </div>
        <div class="optionsupp3">
            <span>2 Suppléments</span>
            <p>1.50€</p>
        </div>
    </div>
    </div>
        </div>
        <script src="script.js"></script>
</body>
</html>
