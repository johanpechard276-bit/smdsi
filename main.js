//Quand le formulaire est envoyé
document.querySelector('form').addEventListener('submit', function(e) {
// Empêche l'envoi normal
e.preventDefault();
 // Récupère les valeurs
const name = document.getElementById('name').value;
const email = document.getElementById('email').value;
 // Vérifie si les champs sont vides
if (name === '' || email === '') {
 // Crée le message d'erreur
const message = document.createElement('p');
message.textContent = 'Vos informations ne sont pas correctes';
message.style.color = 'red';
message.style.marginTop = '10px';
 // Ajoute le message après le formulaire
document.querySelector('form').appendChild(message);
} else {
 // Crée le message de succès
const message = document.createElement('p');
message.textContent = 'Votre demande a bien été envoyée';
message.style.color = 'green';
message.style.marginTop = '10px';
 // Ajoute le message après le formulaire
document.querySelector('form').appendChild(message);
 // Vide les champs
document.getElementById('name').value = '';
document.getElementById('email').value = '';
}
});