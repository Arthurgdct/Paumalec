<?php
include 'Includes/header.php'
?>
<main>
    <section id="accueil">
        <h1 class="bold">Paumalec<br>Spécialisé dans<br>le secteur tertiaire</h1>
        <div id="infoaccueil">
            <div>
                <p> Votre partenaire électricité pour les professionels</p>
                <button>Contact</button>
            </div>
            <div class="bg-white border-radius m1 p1" id="bubble">
                <h2>Des interventions fiables pour vos infrastructures</h2>
                <p>Nous accompagnons les entreprises, commerces et collectivités dans tous leurs projets électriques:
                    Installations neuves, rénovation, mise au normes, maintenance et solutions défficacité énergétique.
                </p>
            </div>
        </div>
    </section>
    <section id="intro" class="white bg-blue">
        <div>
            <h3><span class="yellow">Q</span>ui sommes nous ?</h3>
            <p>Paumalec est une entreprise d'électricité spécialisée dans le secteur tertiaire, au service des
                professionnels depuis plus de 20 ans.</p>
        </div>
        <div>
            <img src="assets/img/electricien" alt="Photo d'un électricien de l'entreprise en pleine intervention.">
            <div>
                <p>Chaque intervention fait preuve de la même exigeance afin de fournir un travail fiable soigné et
                    durable.<br>Cette constance nous a permis de bâtir une relation de confiance solide avec nos clients, dont
                    beaucoup nous suivent depuis le début.<br>Notre plus grande force est donc ce lien de confiance entre client et artisan que nous entretenons
                    par des interventions de qualité, avec des tarifs juste et adaptés à leurs besoins.
                </p>
                <button>Contact</button>
            </div>
        </div>
    </section>
    <section id="confiance">
        <div>
            <h4><span class="yellow">I</span>ls nous font confiance</h4>
            <p>Nous sommes fiers d'accompagner des entreprises majeurs de notre région et des acteurs nationnaux.
                Leurs confiance est le reflet de la qualité de nos interventions et du sérieux dont notre équipe fait
                preuve sur chaque chantier.
                Un grand merci à tous nos client pour leur fidélité.
            </p>
            <div id="confiance-logo">
                <div><img src="assets/img/EiffageGC.png"></div>
                <div><img src="assets/img/logo-pum.png"></div>
                <div><img src="assets/img/Renault.png"></div>
                <div><img src="assets/img/Sourcesdallauch.png"></div>
                <div><img src="assets/img/Edf.png"></div>
                <div><img src="assets/img/EiffageR.png"></div>
                <div><img src="assets/img/Logo_ecole_lacordaire.png"></div>
                <div><img src="assets/img/VisualOpticien.png"></div>
            </div>
        </div>
        </div>
    </section>
    <section id="services" class="bg-blue white">
        <div class="services-header">
            <h5><span class="yellow">N</span>os Services</h5>
        </div>

        <div class="services-grid">
            <div class="service-card large"><img src="assets/img/cadreelectricite.png"></div>

            <div class="service-card"><img src="assets/img/cadreclimatisation.png"></div>
            <div class="service-card"><img src="assets/img/cadresecu.png"></div>
            <div class="service-card"><img src="assets/img/cadreborne.png"></div>
            <div class="service-card"><img src="assets/img/cadredomotique.png"></div>
            <div class="service-card"><img src="assets/img/cadrevolet.png"></div>
            <div class="service-card"><img src="assets/img/cadreelectricitesolaire.png"></div>
            <div class="service-card"><img src="assets/img/cadreautomatisme.png"></div>
            <div class="service-card"><img src="assets/img/cadreinstallation.png"></div>
        </div>
    </section>
    <section id="realisations" class="realisations">
        <h2><span class="yellow">N</span>os Réalisations</h2>
        <div class="realisations-grid">
            <div class="real-card" data-full="assets/img/full1.jpg"> <img src="assets/img/thumb1.jpg"
                    alt="salle de massage avec éclairage bleu"> </div>
            <div class="real-card" data-full="assets/img/full2.jpg"> <img src="assets/img/thumb2.jpg"
                    alt="intérieur d'un spa"> </div>
            <div class="real-card" data-full="assets/img/full3.jpg"> <img src="assets/img/thumb3.jpg"
                    alt="salle de massage avec plafond végétal"> </div>
            <div class="real-card" data-full="assets/img/full4.jpg"> <img src="assets/img/thumb4.jpg"
                    alt="piscine avec rétro-éclairage au plafond"> </div>
        </div>
        <div class="popup" id="popup"> <span class="close">&times;</span> <img id="popup-img" alt="Agrandissement">
        </div>
        <button class="realisations-btn" id="openPopup">Nos réalisations</button>
    </section>
    </section>
    <section id="devis" class="devis-section">
        <h2 class="devis-title"><span>D</span>evis</h2>

        <div class="devis-overlay">
            <p>Prenez un instant pour nous transmettre votre demande : notre équipe vous prépare un devis personnalisé,
                pour répondre à vos besoins et vous accompagner dans la réalisation de votre projet.</p>
            <form id="devisf" class="devis-form" method="POST">
                <div class="form-row">
                    <input type="text" name="nom" placeholder="Nom" required>
                    <input type="text" name="societe" placeholder="Société" required>
                </div>
                <input type="email" name="email" placeholder="E-mail" required>
                <textarea name="message" placeholder="Votre demande..." required></textarea>
                <button type="submit">Envoyer</button>
            </form>
            <p id="form-message"></p>
        </div>
    </section>
    <section id="contact" class="contact-section">
        <h2 class="contact-title"><span>C</span>ontact</h2>
        <p class="contact-intro">
            Proches de vous, nous mettons notre expertise au service de vos projets, avec sérieux et efficacité.
        </p>
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1468297.1701581897!2d4.6556381!3d44.0468495!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8242735957488a81%3A0xd1d0fd514c531b95!2sPaumalec!5e0!3m2!1sfr!2sfr!4v1768665355964!5m2!1sfr!2sfr"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="contact-infos">
            <h3>Paumalec</h3>
            <p>10 MTE MILOU 13013 MARSEILLE</p>
            <p>France</p>
        </div>
    </section>
    <section class="avis">
        <div class="commonninja_component pid-829c0955-b8e3-4c2d-b9d0-fe30ae8ad57a"></div>
    </section>

</main>
<?php
include 'Includes/footer.php'
?>