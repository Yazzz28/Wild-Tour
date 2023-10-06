/*const message = "Votre message a été correctement envoyé, merci de votre visite"
 
document.getElementById("formulaire").addEventListener("submit", function(event){
   event.preventDefault();
   alert(message);
});*/

const icons = document.getElementById("icons");
const nav = document.getElementById("nav");
const links = document.querySelectorAll("nav li");

// Ajouter un gestionnaire d'événement pour l'icône du menu
icons.addEventListener("click", () => {
    nav.classList.toggle("active");
});

// Ajouter des gestionnaires d'événements pour les liens du menu
links.forEach((link) => {
    link.addEventListener("click", () => {
        nav.classList.remove("active");
    });
});