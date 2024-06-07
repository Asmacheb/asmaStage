
// MENU BURGER


// Fonction pour ouvrir/fermer le menu
function toggleMenu() {
    var menu = document.querySelector('.navMenu');
    menu.classList.toggle('active');
}

// Fonction pour fermer le menu lorsque un élément est cliqué
function closeMenuOnClick() {
    var menuItems = document.querySelectorAll('.menuDeroulant a');
    menuItems.forEach(function(item) {
        item.addEventListener('click', function() {
            var menu = document.querySelector('.navMenu');
            menu.classList.remove('active');
        });
    });
}

// Ajout des écouteurs d'événements
document.addEventListener('DOMContentLoaded', function() {
    closeMenuOnClick();
});
  
//   MAP


document.addEventListener('DOMContentLoaded', (event) => {
    
    var map = L.map('map').setView([51.505, -0.09], 13);

    
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);


    L.marker([50.6116, 3.0183]).addTo(map)
            .bindPopup('Snack Loos, Place du Général de Gaulle, Loos, 59120')
            .openPopup();

 });