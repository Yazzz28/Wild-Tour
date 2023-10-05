const message = "Votre message a été correctement envoyé, merci de votre visite"
 
document.getElementById("formulaire").addEventListener("submit", function(event){
   event.preventDefault();
   alert(message);
});