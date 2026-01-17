/*
const burger = document.getElementById('burger-icon');
const nav = document.getElementById('mobile-nav');

burger.addEventListener('click', () => {
    burger.classList.toggle('open');
    nav.classList.toggle('open');
});

// Fermeture du menu quand on clique sur un lien
document.querySelectorAll('#mobile-nav a').forEach(link => {
    link.addEventListener('click', () => {
        burger.classList.remove('open');
        nav.classList.remove('open');
    });
});
*/
const cards = document.querySelectorAll('.real-card');
const popup = document.getElementById('popup');
const popupImg = document.getElementById('popup-img');
const closeBtn = document.querySelector('.close');

cards.forEach(card => {
  card.addEventListener('click', () => {
    const fullSrc = card.dataset.full;
    popupImg.src = fullSrc;
    popup.style.display = 'flex';
  });
});

closeBtn.addEventListener('click', () => {
  popup.style.display = 'none';
});
popup.addEventListener('click', (e) => {
  if (e.target === popup) {
    popup.style.display = 'none';
  }
});

document.getElementById("devisf").addEventListener("submit", async function(e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);

    const response = await fetch("devis.php", {
        method: "POST",
        body: formData
    });

    const result = await response.text();

    if (result.trim() === "OK") {
        document.getElementById("form-message").textContent = "Votre demande a bien été envoyée.";
        document.getElementById("form-message").style.color = "green";

        form.reset();
    } else {
        document.getElementById("form-message").textContent = "Une erreur est survenue.";
        document.getElementById("form-message").style.color = "red";
    }
});

