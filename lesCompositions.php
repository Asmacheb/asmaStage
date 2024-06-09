<?php
require_once 'database.php';
$conn = getDatabaseConnection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compositions</title>
    <link rel="stylesheet" type="text/css" href="composition.css">
</head>
<body>
<?php require_once 'menu.php'; ?> 
    <!-- TACOS -->
    <div class="backTacos" id="tacos">
    <div class="titre1">
        <div class="h2Premier">
       <div class="h2"> <h2>TACOS</h2></div>
       <div class="description1"> <p>Wrap, viande au choix, sauce fromagère,  frites, sauce au choix.</p></div>
      </div>
      <div class="responsiveTacos"><img src="img/imgtacos.png" alt="tacos"></div>
      <div class="prix-container1">
      <div class="prix1">
      <?php
                    try {
                        $stmt = $conn->prepare("
                            SELECT Prix.prix_1viande, Prix.prix_2viandes, Prix.prix_3viandes 
                            FROM Prix 
                            JOIN Coûter ON Prix.id_prix = Coûter.id_prix 
                            JOIN Food ON Coûter.id_food = Food.id_food 
                            WHERE Food.nom_food = 'TACOS'
                        ");
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    } catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }
                    ?>
                    <div class="option">
                        <span>1 Viande</span>
                        <p><?php echo htmlspecialchars($row['prix_1viande']) . "€"; ?></p>
                    </div>
                    <div class="option">
                        <span>2 Viandes</span>
                        <p><?php echo htmlspecialchars($row['prix_2viandes']) . "€"; ?></p>
                    </div>
                    <div class="option">
                        <span>3 Viandes</span>
                        <p><?php echo htmlspecialchars($row['prix_3viandes']) . "€"; ?></p>
                    </div>
                </div>
            </div>
        </div>
 <div class="titresupp1">
    <div class="h2viande"><h2>VIANDE AUX CHOIX</h2></div>
    <div class="viandes">
        <div class="item">
            <img src="img/viandekebab.png" alt="">
            <span class="label">Kebab</span>
            </div>
            <div class="item">
            <img src="img/viandekefta.png" alt="">
            <span class="label">Kefta</span>
            </div>
            <div class="item">
            <img src="img/viandedinde.png" alt="">
            <span class="label">Dinde marinée</span>
            </div>
            <div class="item">
            <img src="img/viandeboeuf.png" alt="">
            <span class="label">Boeuf marinée</span>
            </div>
            <div class="item">
            <img src="img/viandemerguez.png" alt="">
            <span class="label">Merguez</span>
            </div>
            <div class="item">
            <img src="img/viandenuggets.png" alt="">
            <span class="label">Nuggets</span>
            </div>
            <div class="item">
            <img src="img/viandecordonbleu.png" alt="">
            <span class="label">Cordon Bleu</span>
            </div>
            <div class="item">
            <img src="img/viandetenders.png" alt="">
            <span class="label">Tenders</span>
            </div>
        
    </div>



   <div class="h2supp1"><h2>SUPPLÉMENTS</h2></div>
    <div class="suppléments1">
        <div class="item">
            <img src="img/chevre.png" alt="fromage chèvre">
            <span class="label">Chèvre</span>
            </div>
            <div class="item">
            <img src="img/pdt.png" alt="galette de pomme de terre">
            <span class="label">Galette Pdt</span>
            </div>
            <div class="item">
            <img src="img/jambon.png" alt="Jambon de dinde">
            <span class="label">Jamdon dinde</span>
            </div>
            <div class="item">
            <img src="img/oeuf.png" alt="oeuf">
            <span class="label">Oeuf</span>
            </div>
            <div class="item">
            <img src="img/cheddar.png" alt="cheddar">
            <span class="label">Cheddar</span>
            </div>
            <div class="item">
            <img src="img/raclette.png" alt="fromage raclette">
            <span class="label">Raclette</span>
            </div>
            <div class="item">
            <img src="img/salami.png" alt="salami">
            <span class="label">Salami</span>
            </div>
            <div class="item">
            <img src="img/ring.png" alt="Oignons rings">
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

<!-- TACOSBOWL -->
<div class="backTacosbowl" id="Tacosbowl">
<div class="titre1">
    <div class="h2Premier">
   <div class="h2"> <h2>TACOS BOWL</h2></div>
   <div class="description1"> <p>Frites, viande au choix, sauce fromagère, sauce au choix.</p></div>
  </div>
  <div class="responsiveTacosbowl"><img src="img/imgtacosbowl.png" alt="tacosbowl"></div>
  <div class="prix-containerT">
  <div class="prixT">
  <?php
                    try {
                        $stmt = $conn->prepare("
                            SELECT Prix.prix_1viande, Prix.prix_2viandes
                            FROM Prix 
                            JOIN Coûter ON Prix.id_prix = Coûter.id_prix 
                            JOIN Food ON Coûter.id_food = Food.id_food 
                            WHERE Food.nom_food = 'TACOSBOWL'
                        ");
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    } catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }
                    ?>
                    <div class="option">
                        <span>1Viande</span>
                        <p><?php echo htmlspecialchars($row['prix_1viande']) . "€"; ?></p>
                    </div>
                    <div class="option">
                        <span>2Viandes</span>
                        <p><?php echo htmlspecialchars($row['prix_2viandes']) . "€"; ?></p>
                    </div>
                   
                </div>
            </div>
        </div>
<div class="titresupp1">
<div class="h2viande"><h2>VIANDE AUX CHOIX</h2></div>
<div class="viandes">
    <div class="item">
        <img src="img/viandekebab.png" alt="kebab">
        <span class="label">Kebab</span>
        </div>
        <div class="item">
        <img src="img/viandekefta.png" alt="viande hachés">
        <span class="label">Viande Hachés</span>
        </div>
        <div class="item">
        <img src="img/viandedinde.png" alt="Dinde">
        <span class="label">Dinde marinée</span>
        </div>
        <div class="item">
        <img src="img/viandeboeuf.png" alt="Boeuf">
        <span class="label">Boeuf marinée</span>
        </div>
        <div class="item">
        <img src="img/viandemerguez.png" alt="Merguez">
        <span class="label">Merguez</span>
        </div>
        <div class="item">
        <img src="img/viandenuggets.png" alt="Nuggets">
        <span class="label">Nuggets</span>
        </div>
        <div class="item">
        <img src="img/viandecordonbleu.png" alt="Cordon bleu">
        <span class="label">Cordon Bleu</span>
        </div>
        <div class="item">
        <img src="img/viandetenders.png" alt="Tenders">
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
<div class="optionsupp1">
    <span>2 Suppléments</span>
    <p>1.50€</p>
</div>
</div>
</div>

</div>
<!-- ASSIETTES -->

<div class="backAssiette" id="Assiettes">
    <div class="titre1">
        <div class="h2Premier">
       <div class="h2"> <h2>L'ASSIETTE</h2></div>
       <div class="description1"> <p>Salade composée, viande au choix, frites, sauce au choix.</p></div>
      </div>
      <div class="responsiveAssiette"><img src="img/imgassiette.png" alt="assiette"></div>
      <div class="prix-container1">
      <div class="prix1">
      <?php
                    try {
                        $stmt = $conn->prepare("
                            SELECT Prix.prix_1viande, Prix.prix_2viandes, Prix.prix_3viandes 
                            FROM Prix 
                            JOIN Coûter ON Prix.id_prix = Coûter.id_prix 
                            JOIN Food ON Coûter.id_food = Food.id_food 
                            WHERE Food.nom_food = 'ASSIETTE'
                        ");
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    } catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }
                    ?>
                    <div class="option">
                        <span>1 Viande</span>
                        <p><?php echo htmlspecialchars($row['prix_1viande']) . "€"; ?></p>
                    </div>
                    <div class="option">
                        <span>2 Viandes</span>
                        <p><?php echo htmlspecialchars($row['prix_2viandes']) . "€"; ?></p>
                    </div>
                    <div class="option">
                        <span>3 Viandes</span>
                        <p><?php echo htmlspecialchars($row['prix_3viandes']) . "€"; ?></p>
                    </div>
                </div>
            </div>
        </div>
 <div class="titresupp1">
    <div class="h2viande"><h2>VIANDE AUX CHOIX</h2></div>
    <div class="viandes">
        <div class="item">
        <img src="img/viandekebab.png" alt="kebab">
        <span class="label">Kebab</span>
        </div>
        <div class="item">
        <img src="img/viandekefta.png" alt="viande hachés">
        <span class="label">Viande Hachés</span>
        </div>
        <div class="item">
        <img src="img/viandedinde.png" alt="Dinde">
        <span class="label">Dinde marinée</span>
        </div>
        <div class="item">
        <img src="img/viandeboeuf.png" alt="Boeuf">
        <span class="label">Boeuf marinée</span>
        </div>
        <div class="item">
        <img src="img/viandemerguez.png" alt="Merguez">
        <span class="label">Merguez</span>
        </div>
        <div class="item">
        <img src="img/viandenuggets.png" alt="Nuggets">
        <span class="label">Nuggets</span>
        </div>
        <div class="item">
        <img src="img/viandecordonbleu.png" alt="Cordon bleu">
        <span class="label">Cordon Bleu</span>
        </div>
        <div class="item">
        <img src="img/viandetenders.png" alt="Tenders">
        <span class="label">Tenders</span>
        </div>
    </div>



   <div class="h2supp1"><h2>SUPPLÉMENTS</h2></div>
    <div class="suppléments1">
        <div class="item">
        <img src="img/chevre.png" alt="fromage chèvre">
        <span class="label">Chèvre</span>
        </div>
        <div class="item">
        <img src="img/pdt.png" alt="galette de pomme de terre">
        <span class="label">Galette Pdt</span>
        </div>
        <div class="item">
        <img src="img/jambon.png" alt="Jambon de dinde">
        <span class="label">Jamdon dinde</span>
        </div>
        <div class="item">
        <img src="img/oeuf.png" alt="oeuf">
        <span class="label">Oeuf</span>
        </div>
        <div class="item">
        <img src="img/cheddar.png" alt="cheddar">
        <span class="label">Cheddar</span>
        </div>
        <div class="item">
        <img src="img/raclette.png" alt="fromage raclette">
        <span class="label">Raclette</span>
        </div>
        <div class="item">
        <img src="img/salami.png" alt="salami">
        <span class="label">Salami</span>
        </div>
        <div class="item">
        <img src="img/ring.png" alt="Oignons rings">
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
<!-- KAPSALON -->

<div class="backKapsalon" id="Kapsalon">
<div class="titre1">
    <div class="h2Premier">
   <div class="h2"> <h2>KAPSALON</h2></div>
   <div class="description1"> <p>Frites, viande au choix, salade, sauce au choix, cheddar.</p></div>
  </div>
  <div class="responsiveKapsalon"><img src="img/imgkapsalon.png" alt="kapsalon"></div>
  <div class="prix-containerK">
  <div class="prixK">
  <?php
                    try {
                        $stmt = $conn->prepare("
                            SELECT Prix.prix_1viande, Prix.prix_2viandes 
                            FROM Prix 
                            JOIN Coûter ON Prix.id_prix = Coûter.id_prix 
                            JOIN Food ON Coûter.id_food = Food.id_food 
                            WHERE Food.nom_food = 'KAPSALON'
                        ");
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    } catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }
                    ?>
                    <div class="option">
                        <span>1Viande</span>
                        <p><?php echo htmlspecialchars($row['prix_1viande']) . "€"; ?></p>
                    </div>
                    <div class="option">
                        <span>2Viandes</span>
                        <p><?php echo htmlspecialchars($row['prix_2viandes']) . "€"; ?></p>
                    </div>
                   
                </div>
            </div>
        </div>
<div class="titresupp1">
<div class="h2viande"><h2>VIANDE AUX CHOIX</h2></div>
<div class="viandes">
    <div class="item">
        <img src="img/viandekebab.png" alt="kebab">
        <span class="label">Kebab</span>
        </div>
        <div class="item">
        <img src="img/viandekefta.png" alt="viande hachés">
        <span class="label">Viande Hachés</span>
        </div>
        <div class="item">
        <img src="img/viandedinde.png" alt="Dinde">
        <span class="label">Dinde marinée</span>
        </div>
        <div class="item">
        <img src="img/viandeboeuf.png" alt="Boeuf">
        <span class="label">Boeuf marinée</span>
        </div>
        <div class="item">
        <img src="img/viandemerguez.png" alt="Merguez">
        <span class="label">Merguez</span>
        </div>
        <div class="item">
        <img src="img/viandenuggets.png" alt="Nuggets">
        <span class="label">Nuggets</span>
        </div>
        <div class="item">
        <img src="img/viandecordonbleu.png" alt="Cordon bleu">
        <span class="label">Cordon Bleu</span>
        </div>
        <div class="item">
        <img src="img/viandetenders.png" alt="Tenders">
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
<div class="optionsupp1">
    <span>2 Suppléments</span>
    <p>1.50€</p>
</div>
</div>
</div>


</div>
<!-- CARBONNADE -->

<div class="backCarbonnade" id="Carbonnade">
<div class="titre1">
    <div class="h2Premier">
   <div class="h2"> <h2>CARBONNADE</h2></div>
   <div class="description1"> <p> Base frites, sauce carbonnade maison avec de la viande de boeuf.</p></div>
  </div>
  <div class="responsiveCarbonnade"><img src="img/imgcarbonnade.png" alt="carbonnade"></div>
  <div class="prix-container1">
  <div class="prix">
  <?php
                    try {
                        $stmt = $conn->prepare("
                            SELECT Prix.prix_seul, Prix.prix_menu 
                            FROM Prix 
                            JOIN Coûter ON Prix.id_prix = Coûter.id_prix 
                            JOIN Food ON Coûter.id_food = Food.id_food 
                            WHERE Food.nom_food = 'CARBONNADE'
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
<div class="titresuppCarbonnade">
<div class="h2supp"><h2>SUPPLÉMENTS</h2></div>
<div class="suppléments">
    <div class="item">
        <img src="img/chevre.png" alt=" fromage de Chèvre">
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
        <img src="img/raclette.png" alt="Raclette">
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
<div class="optionsupp">
    <span>2 Suppléments</span>
    <p>1.50€</p>
</div>
</div>
</div>
</div>
</body>
</html>