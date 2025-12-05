<?php
include 'controllers/indexctrl.php'
    ?>
<main>
    <section id="accueil">
        <h1 class="bold">Paumalec Spécialisé dans le secteur tertiaire</h1>
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
                    durable.
                    Cette constance nous a permis de bâtir une relation de confiance solide avec nos clients, dont
                    beaucoup nous suivent depuis le début.

                    Notre plus grande force est donc ce lien de confiance entre client et artisan que nous entretenons
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
                <div>
                    <img src="assets/img/EiffageGC" alt="Logo Eiffage génie civil">
                    <img src="assets/img/logo-pum" alt="Logo PUM">
                    <img src="assets/img/Renault" alt="Logo Renault">
                    <img id="sources" src="assets/img/Sourcesdallauch" alt="Logo Sources d'allauche">
                </div>
                <div>
                    <img src="assets/img/Edf" alt="Logo Edf">
                    <img src="assets/img/EiffageR" alt="Logo Eiffage Route">
                    <img src="assets/img/Logo_ecole_lacordaire" alt="Logo Ecole lacordaire">
                    <img src="assets/img/VisualOpticien" alt="Logo Visual Opticien">
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="bg-blue white">
        <div>
            <h5><span class="yellow">N</span>os Services</h5>
        </div>
        <div>
            <div>
                <p>Electricité général</p>
                <p>Installation, rénovation, mise en conformité de vos réseaux électriques (distribution, éclairage,
                    tableaux, protection, cablage et maintenance)</p>
            </div>
            <div>
                <div>
                    <p>climatisation</p>
                    <p>Installation, réparation et maintenance</p>
                </div>
                <div>
                    <p>système de sécurité</p>
                    <p>Installation, réparation et maintenance (alarames, caméras, vidéosuverillances)</p>
                </div>
                <div>
                    <p>Borne de recharge</p>
                    <p>Installation, réparation et maintenance</p>
                </div>
                <div>
                    <p>Domotique</p>
                    <p>Programmation</p>
                </div>
                <div>
                    <p>Volet roulant</p>
                    <p>Installation, motorisation et maintenance sur-mesure</p>
                </div>
                <div>
                    <p>Electricité solaire</p>
                    <p>Installation de panneaux photovoltaïques, réduction énergétique</p>
                </div>
                <div>
                    <p>Automatisme</p>
                    <p>Motorisation et dépannage de portails automatiques</p>
                </div>
                <div>
                    <p>Installation de chantier</p>
                    <p>Raccordement intégral de module temporaire de chantier. Tableaux provisoires, éclairages et
                        sécurité</p>
                </div>
            </div>
        </div>
    </section>
    <section id="realisations">
        <h6><span class="yellow">N</span>os réalisations</h6>
        <p></p>
        <div>
            <div>
                <img src="assets/img/1avant" alt="">
                <p>Avant</p>
            </div>
            <div>
                <img src="assets/img/2apres" alt="">
                <p>Après</p>
            </div>
            <div>
                <img src="assets/img/3avant" alt="">
                <p>Avant</p>
            </div>
            <div>
                <img src="assets/img/4apres" alt="">
                <p>Après</p>
            </div>
        </div>
        <button>Nos réalisations</button>
    </section>
    <section id="devis" class="bg-blue">
        <h6 class="yellow">Devis</h6>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In hic excepturi saepe quis ea deleniti tempore.
            Quasi, totam molestiae corporis magnam commodi tempore, provident corrupti consequatur officia laborum,
            aperiam beataem.</p>
        <form action="index.php" method="post">
            <div>
                <input type="text" name="nom" id="nom" placeholder="Nom">
                <input type="text" name="societe" id="societe" placeholder="Société">
            </div>
            <input type="email" name="email" id="email" placeholder="E-mail">
            <input type="text" name="message" id="message">
            <input type="submit" name="validform" value="Envoyer">
        </form>
    </section>
    <section id="contact">
        <h6><span class="yellow">C</span>ontact</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sit recusandae rerum maiores quia suscipit
            consectetur, minima sunt, ducimus laborum tempore nam nobis vitae, voluptatibus neque repellat error
            reprehenderit consequatur.</p>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1468783.7543398235!2d3.476597869433824!3d44.02721608813505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8242735957488a81%3A0xd1d0fd514c531b95!2sPaumalec!5e0!3m2!1sfr!2sfr!4v1763389607288!5m2!1sfr!2sfr"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p>
            Paumalec, St Name Street, Marseille, France
        </p>
        <div class="commonninja_component pid-829c0955-b8e3-4c2d-b9d0-fe30ae8ad57a"></div>
    </section>
</main>
<?php
include 'Includes/footer.php'
    ?>