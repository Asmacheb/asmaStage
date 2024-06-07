
<!-- menu.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="burger.css" >
</head>
<body>
    <div class="navbar">
        <div class="navLogo"><a href="index.php"><img src="img/logosnack.png" alt="Logo"></a></div>
        <div class="burgerMenu">
            <button class="burger-menu" onclick="toggleMenu()">
                <img src="img/menuvert.png" alt="Menu">
            </button>
        </div>
        <ul class="navMenu">
            <li class="submenu">
                <a href="#" class="deroulant">BURGERS</a>
                <ul class="menuDeroulant">
                    <li><a href="burger_simple.php">Burger Simple</a></li>
                    <li><a href="fish_burger.php">Fish Burger</a></li>
                    <li><a href="smash_burger.php">Smash Burger</a></li>
                    <li><a href="chicken_burger.php">Chicken Burger</a></li>
                    <li><a href="royal_burger.php">Royal Burger</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">CLASSIQUES</a>
                <ul class="menuDeroulant">
                    <li><a href="kebab.php">Kebab</a></li>
                    <li><a href="galette.php">Galette</a></li>
                    <li><a href="panini.php">Panini</a></li>
                    <li><a href="sandwich.php">Sandwich</a></li>
                    <li><a href="menu_enfant.php">Menu enfant</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">COMPOSITIONS</a>
                <ul class="menuDeroulant">
                    <li><a href="">Tacos</a></li>
                    <li><a href="tacosbowl.php">Tacosbowl</a></li>
                    <li><a href="assiettes.php">Assiettes</a></li>
                    <li><a href="kapsalon.php">Kapsalon</a></li>
                    <li><a href="carbonnade.php">Carbonnade</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">PETITES FAIMS</a>
                <ul class="menuDeroulant">
                    <li><a href="nuggets.php">Nuggets</a></li>
                    <li><a href="stick_mozza.php">Stick Mozza</a></li>
                    <li><a href="oignons_ring.php">Oignons ring</a></li>
                    <li><a href="chili_cheese.php">Chili cheese</a></li>
                    <li><a href="salade.php">Salade</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <script src="script.js"></script>
</body>
</html>
