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