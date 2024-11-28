

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Utiliser pour le moteur de recherche -->
    <meta name="description" content="Snack Loos, site de restauration rapide.">
    <!-- Définit le titre de la page lorsqu'elle est partagée -->
    <meta property="og:title" content="Snack Loos">
    <!-- Fournit une description de la page -->
    <meta property="og:description" content="Snack Loos, snack spécialisé dans la restaurations rapide, vous accueil à Loos 59120.">

    <title>Snack Loos</title>
    <!-- feuille de style CSS de la bibliothèque Leaflet pour les cartes interactives -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <!-- Lien vers la version générale de la feuille de style Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- feuille de style pour la page d'accueil -->
    <link rel="stylesheet" type="text/css" href="./Style/accueil.css">
    
    <!-- Favicon de la page -->
    <link rel="icon" href="./img/logosnack.png" type="image/png">

    <!--  polices Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Google Font préconnecté -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
<link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300..700&family=Titan+One&display=swap" rel="stylesheet">
    <!-- Lien vers la police Google "Titan One" -->
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
  
   
  </head>
<body>

<div class="backAcceuil" id="home">
    <div class="navbar">
   <div class="burgerMenu">
        <!-- <button class="burger-menu" onclick="toggleMenu()">
            <img src="img/menuvert.png" alt="Menu">
        </button> -->
    </div>
        <ul class="navMenu">
            <li class="sousmenu">
            <ul class="navMenu">
                <a href="#menus" class="Le">Menus</a>
            </ul>
                <ul class="menuDeroulant">
                        <li class="submenu">
                            <p><a href="./Page/lesBurgers.php" class="subdropbtn">BURGERS</a></p>
                            <ul class="deroulant">
                                <li><a href="./Page/lesBurgers.php#burgersimple">Burger Simple</a></li>
                                <li><a href="./Page/lesBurgers.php#fishburger">Fish Burger</a></li>
                                <li><a href="./Page/lesBurgers.php#smashburger">Smash Burger </a></li>
                                <li><a href="./Page/lesBurgers.php#chickenburger">Chicken Burger </a></li>
                                <li><a href="./Page/lesBurgers.php#royalburger">Royal Burger </a></li>
                            </ul>
                        </li>
                       
                    <li class="submenu">
                        <p><a href="./Page/lesClassiques.php#kebab">CLASSIQUES</a></p>
                        <ul class="deroulant">
                            <li><a href="./Page/lesClassiques.php#kebab">Kebab</a></li>
                            <li><a href="./Page/lesClassiques.php#galette">Galette</a></li>
                            <li><a href="./Page/lesClassiques.php#panini">Panini</a></li>
                            <li><a href="./Page/lesClassiques.php#sandwich">Sandwich</a></li>
                            <li><a href="./Page/lesClassiques.php#enfant">Menu enfant</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                      <p><a href="./Page/lesCompositions.php">COMPOSITIONS</a></p>
                        <ul class="deroulant">
                            <li><a href="./Page/lesCompositions.php#tacos">Tacos</a></li>
                            <li><a href="./Page/lesCompositions.php#tacosbowl">Tacosbowl</a></li>
                            <li><a href="./Page/lesCompositions.php#assiette">Assiettes</a></li>
                            <li><a href="./Page/lesCompositions.php#kapsalon">Kapsalon</a></li>
                            <li><a href="./Page/lesCompositions.php#carbonnade">Carbonnade</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                    <p><a href="./Page/lesPetiteFaims.php">PETITES FAIMS</a></p>
                        <ul class="deroulant">
                            <li><a href="./Page/lesPetiteFaims#nuggets">Nuggets</a></li>
                            <li><a href="./Page/lesPetiteFaims#mozza">Stick Mozza</a></li>
                            <li><a href="./Page/lesPetiteFaims#oignons">Oignons ring</a></li>
                            <li><a href="./Page/lesPetiteFaims#chili">Chili cheese</a></li>
                            <li><a href="./Page/lesPetiteFaims#salade">Salade</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="navLogo"><a href="#home">
          <img src="./img/logosnack.png" alt="Logo"></a>
        </div>
        <ul class="navContacts">
            <li><a href="#contact" class="Le">Contacts</a></li>
        </ul>
       <!-- <div class="avatar">
        <a href="./Admin/connexion.php"><img src="./img/user.png" alt=""></a>
       </div> -->
    </div>
<div class="titre">
  <h1 id="title">SNACK LOOS</h1>
</div>
</div>
 
<!-- PAGE2 -->
<div class="page2">
  <div class="menu-section">
   <a href="../Page/lesBurgers.php"><h2 class="menu-title">LES BURGERS</h2></a>
    <div class="burgers">
    <a href="../Page/lesBurgers.php#burgersimple"><img src="img/lesimple.png" alt="Le Burger simple"></a>
    <a href="../Page/lesBurgers.php#fishburger"><img src="img/lefish.png" alt="Le Fish Burger"></a>
    <a href="../Page/lesBurgers.php#smashburger"><img src="img/lesmash.png" alt="Le Smash Burger"></a>
    <a href="../Page/lesBurgers.php#chickenburger"><img src="img/lechicken.png" alt="Le Chicken Burger"></a>
    <a href="../Page/lesBurgers.php#royalburger"><img src="img/leroyal.png" alt="Le Royal Burger"></a>
    </div>
  </div>
  
  <div class="menu-section">
  <a href="../Page/lesClassiques.php"><h2 class="menu-title">LES CLASSIQUES</h2></a>
    <div class="classiques">
      <a href="./Page/lesClassiques.php#kebab"><img src="img/kebab.png" alt="Kebab"></a>
      <a href="./Page/lesClassiques.php#galette"><img src="img/galette.png" alt="Galette"></a>
      <a href="./Page/lesClassiques.php#panini"><img src="img/panini.png" alt="Panini"></a>
      <a href="./Page/lesClassiques.php#sandwich"><img src="img/sandwich.png" alt="Sandwich"></a>
      <a href="./Page/lesClassiques.php#enfant"><img src="img/enfants.png" alt="Menu Enfants"></a>
    </div>
  </div>
</div>




<!-- PAGE3 -->
<div class="page3">

  <div class="menu-section2">
  <a href="./Page/lesCompositions.php"><h2 class="menu-title2">LES COMPOSITIONS</h2></a>
    <div class="compositions">
      <a href="./Page/lesCompositions.php#tacos"><img src="img/tacos.png" alt="Tacos"></a>
      <a href="./Page/lesCompositions.php#tacosbowl"><img src="img/tacosbowl.png" alt="Tacos Bowl"></a>
      <a href="./Page/lesCompositions.php#assiette"><img src="img/assiette.png" alt="Assiette"></a>
      <a href="./Page/lesCompositions.php#kapsalon"><img src="img/kapsalon.png" alt="Kapsalon"></a>
      <a href="./Page/lesCompositions.php#carbonnade"><img src="img/carbonnade.png" alt="Carbonnade"></a>
    </div>
  </div>
  
  <div class="menu-section2">
  <a href="../Page/lesPetiteFaims.php"><h2 class="menu-title2"> LES PETITES FAIMS</h2></a>
    <div class="petitefaim">
     <a href="./Page/lesPetiteFaims.php#nuggets"> <div><img src="img/nuggets.png" alt=""></div></a>
     <a href="./Page/lesPetiteFaims.php#mozza"><div><img src="img/stickmozza.png" alt=""></div></a>
     <a href="./Page/lesPetiteFaims.php#oignons"><div><img src="img/oignonsring.png" alt=""></div></a>
     <a href="./Page/lesPetiteFaims.php#chili"><div><img src="img/chilicheese.png" alt=""></div></a>
     <a href="./Page/lesPetiteFaims.php#salade"><div><img src="img/salade.png" alt=""></div></a>
    </div>
  </div>
</div>
<!-- PAGE4 -->
<div class="contact" id="contact">
   <div class="gauche">
     <div class="map" id="map"><!-- Intégrer une carte Google Maps ici --></div>
  </div>
<div class="droite">
   <div class="contact-info">
    <p>Du Lundi au Samedi: 11h/14h 18h/22h</p>
    <p>Dimanche: Fermé</p>
    <p>Place du Général de Gaulle Loos, 59120</p>
    <p>09.52.67.14.63</p>
   </div>
   <div class="reseaux">
    <div class="box">
   <div class="logo"><img src="img/snapchat-3.png" alt=""></div>
   <div class="mon"><h3>Snack-loos</h3></div>
   </div>
   <div class="box">
   <div class="logo"><img src="img/instagram.png" alt=""></div>
   <div class="mon"><h3>Snackloos</h3></div>
   </div>
   <div class="box">
   <div class="logo"><img src="img/facebook-2.png" alt=""></div>
   <div class="mon"><h3>Snack loos</h3></div>
   </div> 
  </div>
</div>
</div>
<footer><p>© 2024 Snack Loos - Tous droits réservés - Conception et dévloppement par Chebaiki Asma</p>
</footer>

<script src="./script.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

</body>
</html>
