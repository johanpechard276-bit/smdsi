//Quand le formulaire est envoyé
document.querySelector('form').addEventListener('submit', function(e) {
 // Laisse PHP gérer le formulaire (pas de preventDefault)
 
 // Vérifie les champs avant envoi
const name = document.getElementById('name').value;
const email = document.getElementById('email').value;

if (name === '' || email === '') {
    // Empêche l'envoi seulement si champs vides
    e.preventDefault();
    
    // Message d'erreur
    const message = document.createElement('p');
    message.textContent = 'Vos informations ne sont pas correctes';
    message.style.color = 'red';
    message.style.marginTop = '10px';
    document.querySelector('form').appendChild(message);
}
// Si tout est bon, PHP s'exécute normalement
}););