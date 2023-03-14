
//Recuperation Formulaire et champ
const formulaire = document.getElementById("formulaire_post");
const nomInput = document.getElementById("nom");
const emailInput = document.getElementById("email");
const sujetInput = document.getElementById("sujet");
const messageInput = document.getElementById("message");

//ajout event listener
formulaire.addEventListener("submit", function(event) {
    event.preventDefault();

    const nom = nomInput.value.trim();
    const email = emailInput.value.trim();
    const message = messageInput.value.trim();

    if (nom === "" || email === "" || sujet=="" || message === "") {
        alert("Veuillez remplir tous les champs.");
        return;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Veuillez entrer une adresse e-mail valide.");
        return;
    }

    alert("Le formulaire a été envoyé avec succès !");
    formulaire.reset();
});

