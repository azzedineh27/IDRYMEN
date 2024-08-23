<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <title>Document</title>
    <style>
@import url('https://fonts.cdnfonts.com/css/ica-rubrik-black');
@import url('https://fonts.cdnfonts.com/css/poppins');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    background-color: white;
    padding-top: 80px;
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
    background-color: #ffffff;
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
    color: #2e7d32;
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

.banner {
    width: 100%;
    min-height: 100vh;
    text-align: center;
    overflow: visible;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    z-index: 10;
}

.banner .message {
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 60px;
    color: #25283B;
    z-index: 2;
    text-align: center;
    font-family: 'ICA Rubrik', sans-serif;
}

.banner .slider {
    position: relative;
    width: 160px;
    height: 200px;
    transform-style: preserve-3d;
    animation: autoRun 20s linear infinite;
    z-index: 10;
}

@keyframes autoRun {
    from {
        transform: perspective(1000px) rotateX(-16deg) rotateY(0deg);
    }
    to {
        transform: perspective(1000px) rotateX(-16deg) rotateY(360deg);
    }
}

.banner .slider .item {
    position: absolute;
    inset: 0 0 0 0;
    transform: rotateY(calc((var(--position) - 1) * (360 / var(--quantity)) * 1deg)) translateZ(300px);
}

.banner .slider .item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.content {
    padding: 20px;
    max-width: 1200px;
    margin: auto;
}

.histoire {
    padding: 50px 20px;
}

.histoire-section {
    display: flex;
    flex-direction: row; /* Alignement horizontal du texte et de l'image */
    align-items: center; /* Aligner verticalement au centre */
    gap: 20px;
}

.histoire-texte {
    flex: 2; /* Prend plus de place que l'image */
    min-width: 300px;
}

.image-equipe,
.image-cinema {
    flex: 1;
    max-width: 300px; /* Limite la largeur maximale à 300px */
    height: auto; /* Maintient le ratio de l'image */
    border-radius: 10px;
    object-fit: cover;
}

/* Si vous souhaitez ajuster plus spécifiquement */
.image-cinema img, 
.image-equipe img {
    max-width: 100%; /* Assure que l'image ne dépasse pas la taille de son conteneur */
    height: auto;
    width: 150%; /* Définit la largeur de l'image à 50% de son conteneur */
}

.txt-grp,
.txt-equipe {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
}

.titre-grp {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
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

    .histoire-section {
        flex-direction: column; /* Retourne à l'alignement vertical sur mobile */
    }

    .image-equipe,
    .image-cinema {
        max-width: 100%; /* Laisse l'image prendre toute la largeur sur mobile */
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
        <div class="nav-links">
            <a href="index.php?controller=accueil&action=accueil" class="nav-item" data-target="Accueil">Accueil</a>
            <a href="index.php?controller=services&action=QSN" class="nav-item" data-target="QSN">A propos</a>
            <a href="index.php?controller=services&action=services" class="nav-item" data-target="Services"><span>Services</span></a>
            <a href="index.php?controller=contact&action=contact" class="nav-item" data-target="Contact">Contact</a>
            <a href="index.php?controller=services&action=devis" class="nav-item" data-target="Devis"><span>Devis</span></a>
        </div>
    </nav>

    <div class="banner">
        <div class="message">
            Découvrez qui nous sommes !
        </div>
        <div class="slider" style="--quantity: 10">
            <div class="item" style="--position: 1"><img src="Images/plante1.jpg" alt=""></div>
            <div class="item" style="--position: 2"><img src="Images/plante2.jpg" alt=""></div>
            <div class="item" style="--position: 3"><img src="Images/plante3.jpg" alt=""></div>
            <div class="item" style="--position: 4"><img src="Images/plante4.jpg" alt=""></div>
            <div class="item" style="--position: 5"><img src="Images/plante5.jpg" alt=""></div>
            <div class="item" style="--position: 6"><img src="Images/plante6.jpg" alt=""></div>
            <div class="item" style="--position: 7"><img src="Images/plante7.jpg" alt=""></div>
            <div class="item" style="--position: 8"><img src="Images/plante8.jpg" alt=""></div>
            <div class="item" style="--position: 9"><img src="Images/plante9.jpg" alt=""></div>
            <div class="item" style="--position: 10"><img src="Images/plante10.jpg" alt=""></div>
        </div>
    </div>

    <div class="content">
        <div class="histoire">
            <div class="histoire-section">
                <div class="histoire-texte">
                    <div class="titre-grp">
                        <h1>Qui sommes-nous</h1>
                    </div>
                    <div class="txt-equipe">
                        <p>Bonjour à tous, nous sommes l'équipe d'Idrymen, spécialistes de la végétalisation d'espaces professionnels, et nous vous souhaitons la bienvenue ! 
                            En parcourant notre site, vous découvrirez une large gamme de solutions naturelles pour transformer vos bureaux en véritables havres de verdure. 
                            Nos services incluent la conception, l'installation et l'entretien de végétalisation adaptée à vos besoins.</p>
                    </div>
                </div>
                <div class="image-equipe">
                    <img src="Images/qsn1.jpg" alt="Notre équipe">
                </div>
            </div>
            <div class="histoire">
                <div class="histoire-section">
                    <div class="histoire-texte">
                        <div class="titre-grp">
                            <h1>Notre histoire</h1>
                        </div>
                        <div class="txt-grp">
                            <p>Fondée en 2023, Idrymen est née d'une passion commune pour la nature et l'idée de reconnecter les lieux de travail avec des éléments naturels. 
                                Depuis nos débuts modestes, nous avons évolué pour devenir une référence dans la végétalisation des bureaux à travers le pays. 
                                Notre mission est simple : allier esthétisme et bien-être en transformant des espaces de travail classiques en écosystèmes vivants. 
                                Aujourd'hui, nous sommes fiers d'accompagner de nombreuses entreprises dans cette démarche innovante et écoresponsable.</p>
                        </div>
                    </div>
                    <div class="image-cinema">
                        <img src="Images/qsn2.jpg" alt="Notre histoire">
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
                <li><a href="#"></a>FAQ</li>
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
            Tous droits réservés • Idrymen.fr 2024
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
});

    </script>
</body>

</html>
