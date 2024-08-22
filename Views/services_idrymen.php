<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>IDRYMEN - Nos Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <style>
        @import url('https://fonts.cdnfonts.com/css/ica-rubrik-black');
        @import url('https://fonts.cdnfonts.com/css/poppins');
        body {
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    margin: 0;
    padding-top: 60px;
    background-color: #f4f4f4;
}

nav {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    z-index: 1000;
    transition: background-color 0.3s ease;
    background: linear-gradient(90deg, rgba(255, 255, 255, 0.8), rgba(245, 245, 245, 1));
}

.nav-left {
    display: flex;
    align-items: center;
}

.nav-logo {
    height: 50px;
    margin-right: 20px;
}

.site-name {
    font-weight: bold;
    color: #4CAF50;
    font-size: 1.5em;
}
nav, .nav-item, .site-name {
    font-family: 'Poppins', sans-serif;
}


.nav-links {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    flex-grow: 1;
}

.nav-item {
    position: relative;
    color: #4CAF50;
    padding: 10px 15px;
    text-decoration: none;
    font-size: 1em;
    margin: 0 10px;
    transition: color 0.3s ease;
}

.nav-item span {
    position: relative;
    z-index: 1;
}

.nav-item::before {
    content: "";
    position: absolute;
    width: 0;
    height: 3px;
    bottom: 0;
    left: 0;
    background-color: #4CAF50;
    transition: width 0.4s ease-in-out;
}

.nav-item:hover {
    color: #218838;
}

.nav-item:hover::before {
    width: 100%;
}

.nav-hamburger {
    display: none;
    font-size: 24px;
    cursor: pointer;
    color: #4CAF50;
}

@media (max-width: 768px) {
    .nav-links {
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 60px;
        right: 0;
        background: #fff;
        width: 100%;
        display: none;
    }

    .nav-item {
        margin: 10px 0;
    }

    .nav-hamburger {
        display: block;
    }

    .nav-links.active {
        display: flex;
    }
}

h1 {
    text-align: center;
    color: #4CAF50;
    margin-top: 40px;
}

.container {
    width: 80%;
    margin: 20px auto;
}

.offer {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    padding: 20px;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.offer:hover {
    transform: translateY(-10px);
}

.offer-header {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    margin-bottom: 15px;
}

.offer-title {
    font-size: 2em;
    color: #4CAF50;
    margin-bottom: 10px;
}

.offer-description {
    color: #555;
    font-size: 1.2em;
}

.offer-price-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    margin-top: 20px;
}

.offer-price {
    font-size: 1.8em;
    font-weight: bold;
    color: #333;
}

.devis-button {
    background-color: #28a745;
    color: white;
    padding: 15px 25px;
    font-size: 1.2em;
    text-decoration: none;
    border-radius: 10px;
    transition: background-color 0.3s;
}

.devis-button:hover {
    background-color: #218838;
}

.arrow {
    font-size: 2em;
    cursor: pointer;
    color: #4CAF50;
}

.offer-content {
    display: none;
    padding: 20px;
    background-color: #fafafa;
    border-top: 1px solid #ccc;
    margin-top: 20px;
}

.steps-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: nowrap;
    overflow-x: auto;
}

.step {
    flex: 0 0 20%;
    text-align: center;
    margin: 0 10px;
}

.step img {
    max-width: 100px;
    height: auto;
    margin-bottom: 10px;
}

.step h4 {
    font-size: 1.1em;
    color: #4CAF50;
    margin-bottom: 5px;
}

.step p {
    font-size: 1em;
    color: #555;
}

footer {
    width: 100%;
    background-color: #1b1b1b;
    color: #f0f0f0;
    padding: 40px 20px;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-section {
    flex: 1;
    min-width: 200px;
    margin: 10px 20px;
}

.footer-section h3 {
    margin-bottom: 20px;
    font-size: 18px;
    text-transform: uppercase;
}

.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li {
    margin-bottom: 10px;
}

.footer-section ul li a {
    color: #f0f0f0;
    text-decoration: none;
    transition: color 0.3s;
}

.footer-section ul li a:hover {
    color: #4CAF50;
}

.footer-logo {
    text-align: center;
    margin-bottom: 10px;
}

.footer-logo img {
    max-width: 120px;
    margin-bottom: 10px;
}

.footer-social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 10px;
}

.footer-social-icons img {
    width: 30px;
    height: 30px;
    transition: transform 0.3s;
}

.footer-social-icons img:hover {
    transform: scale(1.2);
}

.footer-credits {
    font-size: 14px;
    text-align: center;
    width: 100%;
    padding-top: 20px;
}

@media (max-width: 768px) {
    footer {
        flex-direction: column;
        align-items: center;
    }

    .footer-section {
        text-align: center;
    }

    .footer-credits {
        text-align: center;
    }
}

    </style>
</head>

<body>

<nav>
    <div class="nav-left">
        <img src="Images/logo_idrymen.webp" alt="Logo" class="nav-logo">
        <span class="site-name">IDRYMEN</span>
    </div>
    <div class="nav-hamburger">
        <span class="material-symbols-outlined">menu</span>
    </div>
    <div class="nav-links">
        <a href="index.php?controller=accueil&action=accueil" class="nav-item" data-target="Accueil">Accueil</a>
        <a href="index.php?controller=services&action=QSN" class="nav-item" data-target="QSN">A propos</a>
        <a href="index.php?controller=services&action=services" class="nav-item" data-target="Services"><span>Services</span></a>
        <a href="index.php?controller=contact&action=contact" class="nav-item" data-target="Contact">Contact</a>
        <a href="index.php?controller=services&action=devis" class="nav-item" data-target="Devis"><span>Devis</span></a>
    </div>
</nav>

<h1>Nos Offres</h1>

<div class="container">
    <div class="offer" id="offer-entretien">
        <div class="offer-header">
            <div class="offer-title">Entretien</div>
            <div class="offer-description">Maintenance complète de vos plantes pour un espace vert et harmonieux.</div>
        </div>
        <div class="offer-price-section">
            <div class="offer-price">À partir de 100€</div>
            <a href="index.php?controller=services&action=devis" class="devis-button">Faire un Devis</a>
            <span class="arrow down" onclick="toggleDetails('entretien-details')">&#x25BC;</span>
        </div>
        <div class="offer-content" id="entretien-details">
            <h3>Étapes de l'entretien</h3>
            <div class="steps-container">
                <div class="step">
                    <img src="Images/plante1.jpg" alt="Évaluation">
                    <h4>Évaluation</h4>
                    <p>Évaluation de vos plantes existantes</p>
                </div>
                <div class="step">
                    <img src="Images/plante1.jpg" alt="Nettoyage">
                    <h4>Nettoyage</h4>
                    <p>Nettoyage régulier des plantes et des pots</p>
                </div>
                <div class="step">
                    <img src="Images/plante1.jpg" alt="Arrosage">
                    <h4>Arrosage</h4>
                    <p>Arrosage et fertilisation</p>
                </div>
                <div class="step">
                    <img src="Images/plante1.jpg" alt="Surveillance">
                    <h4>Surveillance</h4>
                    <p>Surveillance de la santé des plantes</p>
                </div>
                <div class="step">
                    <img src="Images/plante1.jpg" alt="Remplacement">
                    <h4>Remplacement</h4>
                    <p>Remplacement des plantes si nécessaire</p>
                </div>
            </div>
        </div>
    </div>

    <div class="offer" id="offer-vegetalisation">
        <div class="offer-header">
            <div class="offer-title">Végétalisation</div>
            <div class="offer-description">Transformez votre espace de travail en un havre de nature et de bien-être.</div>
        </div>
        <div class="offer-price-section">
            <div class="offer-price">À partir de 200€</div>
            <a href="index.php?controller=services&action=devis" class="devis-button">Faire un Devis</a>
            <span class="arrow down" onclick="toggleDetails('vegetalisation-details')">&#x25BC;</span>
        </div>
        <div class="offer-content" id="vegetalisation-details">
            <h3>Étapes de la végétalisation</h3>
            <div class="steps-container">
                <div class="step">
                    <img src="images/consultation.png" alt="Consultation">
                    <h4>Consultation</h4>
                    <p>Consultation et conception personnalisée</p>
                </div>
                <div class="step">
                    <img src="images/selection.png" alt="Sélection">
                    <h4>Sélection</h4>
                    <p>Sélection des plantes adaptées à votre espace</p>
                </div>
                <div class="step">
                    <img src="images/installation.png" alt="Installation">
                    <h4>Installation</h4>
                    <p>Installation de solutions de végétalisation</p>
                </div>
                <div class="step">
                    <img src="images/optimisation.png" alt="Optimisation">
                    <h4>Optimisation</h4>
                    <p>Optimisation pour un entretien facile</p>
                </div>
                <div class="step">
                    <img src="images/suivi.png" alt="Suivi">
                    <h4>Suivi</h4>
                    <p>Suivi après installation</p>
                </div>
            </div>
        </div>
    </div>

    <div class="offer" id="offer-complet">
        <div class="offer-header">
            <div class="offer-title">Végétalisation + Entretien</div>
            <div class="offer-description">Profitez d'un espace vert avec un entretien régulier sans soucis.</div>
        </div>
        <div class="offer-price-section">
            <div class="offer-price">À partir de 300€</div>
            <a href="index.php?controller=services&action=devis" class="devis-button">Faire un Devis</a>
            <span class="arrow down" onclick="toggleDetails('complet-details')">&#x25BC;</span>
        </div>
        <div class="offer-content" id="complet-details">
            <h3>Étapes combinées</h3>
            <div class="steps-container">
                <div class="step">
                    <img src="images/conception_installation.png" alt="Conception et Installation">
                    <h4>Conception & Installation</h4>
                    <p>Conception et installation de la végétalisation</p>
                </div>
                <div class="step">
                    <img src="Images/entretien.png" alt="Entretien">
                    <h4>Entretien</h4>
                    <p>Entretien complet régulier des plantes</p>
                </div>
                <div class="step">
                    <img src="images/surveillance.png" alt="Surveillance">
                    <h4>Surveillance</h4>
                    <p>Surveillance de la santé des plantes</p>
                </div>
                <div class="step">
                    <img src="images/remplacement.png" alt="Remplacement">
                    <h4>Remplacement</h4>
                    <p>Remplacement des plantes si nécessaire</p>
                </div>
                <div class="step">
                    <img src="images/support.png" alt="Support continu">
                    <h4>Support continu</h4>
                    <p>Support continu pour optimiser la végétalisation</p>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="footer-section">
        <div class="footer-logo">
            <img src="Images\logo_idrymen.webp" alt="Logo Pousse">
            <p>Reconnectez vos espaces à la nature, avec style.</p>
            <div class="footer-social-icons">
                <a href="#"><img src="Images\insta.webp" alt="Instagram"></a>
                <a href="#"><img src="Images/snap.webp" alt="Pinterest"></a>
                <a href="#"><img src="Images\linkedin.webp" alt="LinkedIn"></a>
            </div>
        </div>
    </div>

    <div class="footer-section">
        <h3>Végétalisez</h3>
        <ul>
            <li><a href="#">Bureaux</a></li>
            <li><a href="#">Végétalisation</a></li>
            <li><a href="#">Entretien</a></li>
        </ul>
    </div>

    <div class="footer-section">
        <h3>L'entreprise</h3>
        <ul>
            <li><a href="#">À propos</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#"></a>Accueil</li>
        </ul>
    </div>

    <div class="footer-section">
        <h3>Contactez-nous</h3>
        <ul>
            <li><a href="#">Devis</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

    <div class="footer-section">
        <h3>Informations Légales</h3>
        <ul>
            <li><a href="#">Mentions Légales</a></li>
            <li><a href="#">Politique de confidentialité</a></li>
        </ul>
    </div>

    <div class="footer-credits">
        Tous droits réservés • Idrymen.fr 202
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    // Hamburger menu functionality for mobile responsiveness
    const hamburger = document.querySelector('.nav-hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    // Toggle offer details visibility
    function toggleDetails(offerId) {
        const details = document.getElementById(offerId);
        const arrow = details.previousElementSibling.querySelector('.arrow');

        if (details.style.display === "none" || details.style.display === "") {
            details.style.display = "block";
            arrow.classList.remove("down");
            arrow.classList.add("up");
        } else {
            details.style.display = "none";
            arrow.classList.remove("up");
            arrow.classList.add("down");
        }
    }

    // Attach event listeners to arrow icons
    document.querySelectorAll('.arrow').forEach(arrow => {
        arrow.addEventListener('click', () => {
            const offerId = arrow.closest('.offer').id + '-details';
            toggleDetails(offerId);
        });
    });
});

</script>

</body>

</html>
