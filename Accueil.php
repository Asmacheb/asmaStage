

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" type="text/css" href="accueil.css">
</head>
<body>

<div class="backAcceuil">
  
    <div class="navbar">
      <div class="burgerMenu">
        <button class="burger-menu" onclick="toggleMenu()">
            <img src="img/menuvert.png" alt="Menu">
        </button>
    </div>
        <ul class="navMenu">
            <li class="sousmenu">
                <ul class="navMenu">
                <a href="#menus" class="Le">Menus</a>
            </ul>
                <ul class="menuDeroulant">
                        <li class="submenu">
                            <a href="#" class="subdropbtn">Burgers</a>
                            <ul class="deroulant">
                                <li><a href="lesBurgers.php#burger_simple">Burger Simple</a></li>
                                <li><a href="#burger2">Fish Burger</a></li>
                                <li><a href="#burger3">Smash Burger </a></li>
                                <li><a href="#burger3">Chicken Burger </a></li>
                                <li><a href="#burger3">Royal Burger </a></li>
                            </ul>
                        </li>
                       
                    <li class="submenu">
                        <a href="#" >Classiques</a>
                        <ul class="deroulant">
                            <li><a href="#Kebab">Kebab</a></li>
                            <li><a href="#Galette">Galette</a></li>
                            <li><a href="#Panini">Panini</a></li>
                            <li><a href="#Sandwich">Sandwich</a></li>
                            <li><a href="#Menuenfant">Menu enfant</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#">Compositions</a>
                        <ul class="deroulant">
                            <li><a href="#composition1">Tacos</a></li>
                            <li><a href="#composition2">Tacosbowl</a></li>
                            <li><a href="#composition3">Assiettes</a></li>
                            <li><a href="#composition3">Kapsalon</a></li>
                            <li><a href="#composition3">Carbonnade</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#">Petites Faims</a>
                        <ul class="deroulant">
                            <li><a href="#petitefaim1">Nuggets</a></li>
                            <li><a href="#petitefaim2">Stick Mozza</a></li>
                            <li><a href="#petitefaim3">Oignons ring</a></li>
                            <li><a href="#petitefaim3">Chili cheese</a></li>
                            <li><a href="#petitefaim3">Salade</a></li>

                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="navLogo"><a href="#home">
          <img src="img/logosnack.png" alt="Logo"></a>
        </div>
        <ul class="navContacts">
            <li><a href="#contacts "   class="Le">Contacts</a></li>
        </ul>
       <div class="avatar">
        <img src="img/avatar-de-connexion.png" alt="">
       </div>
    </div>
<div class="titre">
  <h1>SNACK LOOS</h1>
</div>
</div>
 
<!-- PAGE2 -->
<div class="page2">
  <div class="menu-section">
    <h2 class="menu-title">LES BURGERS</h2>
    <div class="burgers">
      <div><a href="simple.html"><img src="img/lesimple.png" alt="Le Burger simple"></a></div>
      <div><a href="fish.html"><img src="img/lefish.png" alt="Le Fish Burger"></a></div>
      <div><a href="smash.html"><img src="img/lesmash.png" alt="Le Smash Burger"></a></div>
      <div><a href="chicken.html"><img src="img/lechicken.png" alt="Le Chicken Burger"></a></div>
      <div><a href="royal.html"><img src="img/leroyal.png" alt="Le Royal Burger"></a></div>
    </div>
  </div>
  
  <div class="menu-section">
    <h2 class="menu-title"> LES CLASSIQUES</h2>
    <div class="classiques">
      <a href="kebab.html"><img src="img/kebab.png" alt="Kebab"></a>
      <a href="galette.html"><img src="img/galette.png" alt="Galette"></a>
      <a href="panini.html"><img src="img/panini.png" alt="Panini"></a>
      <a href="sandwich.html"><img src="img/sandwich.png" alt="Sandwich"></a>
      <a href="menuenfant.html"><img src="img/enfants.png" alt="Menu Enfants"></a>
    </div>
  </div>
</div>




<!-- PAGE3 -->
<div class="page3">

  <div class="menu-section2">
    <h2 class="menu-title2">LES COMPOSITIONS</h2>
    <div class="compositions">
      <a href="#Tacos"><img src="img/tacos.png" alt="Tacos"></a>
      <a href="#Tacosbowl"><img src="img/tacosbowl.png" alt="Tacos Bowl"></a>
      <a href="#Assiette"><img src="img/assiette.png" alt="Assiette"></a>
      <a href="#Kapsalon"><img src="img/kapsalon.png" alt="Kapsalon"></a>
      <a href="#Carbonnade"><img src="img/carbonnade.png" alt="Carbonnade"></a>
    </div>
  </div>
  
  <div class="menu-section2">
    <h2 class="menu-title2"> LES PETITES FAIMS</h2>
    <div class="petitefaim">
     <a href="nuggets.html"> <div><img src="img/nuggets.png" alt=""></div></a>
     <a href="stickmozza.html"><div><img src="img/stickmozza.png" alt=""></div></a>
     <a href="oignonsrings.html"><div><img src="img/oignonsring.png" alt=""></div></a>
     <a href="chilicheese.html"><div><img src="img/chilicheese.png" alt=""></div></a>
     <a href="salade.html"><div><img src="img/salade.png" alt=""></div></a>
    </div>
  </div>
</div>
<!-- PAGE4 -->
<div class="contact">
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
   <div class="logo"><img src="img/snapchat-3.png" alt=""></div>
   <div class="logo"><img src="img/instagram.png" alt=""></div>
   <div class="logo"><img src="img/facebook-2.png" alt=""></div>
  </div>
</div>
<script src="script.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</body>
</html>