<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDRYMEN Mentions Légales</title>
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
            padding: 0;
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
            background-color: #ffffff;
            z-index: 1000;
            transition: background-color 0.3s ease;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.8), rgba(245, 245, 245, 1));
            margin: 0;
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

        .main-content {
            flex: 1;
            background-color: #fff;
            max-width: 800px;
            margin: 100px auto 20px auto;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1, h2 {
            color: #4CAF50;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            text-align: center;
        }

        h2 {
            font-size: 1.75em;
            margin-top: 20px;
        }

        p, ul {
            line-height: 1.6;
            font-size: 1.1em;
            margin: 10px 0;
        }

        ul {
            padding-left: 20px;
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
    <!-- Navbar -->
    <nav>
        <div class="nav-left">
            <img src="Images/logo_idrymen.webp" alt="Logo" class="nav-logo">
            <span class="site-name">IDRYMEN</span>
        </div>
        <div class="nav-hamburger">
            <span class="material-symbols-outlined">menu</span>
        </div>
        <div class="nav-links">
            <a href="index.php?controller=accueil&action=accueil" class="nav-item">Accueil</a>
            <a href="index.php?controller=services&action=QSN" class="nav-item">A propos</a>
            <a href="index.php?controller=services&action=services" class="nav-item">Services</a>
            <a href="index.php?controller=contact&action=contact" class="nav-item">Contact</a>
            <a href="index.php?controller=services&action=devis" class="nav-item">Devis</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Mentions Légales</h1>

        <h2>1. Informations Générales</h2>
        <p>
            Conformément à l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique,
            nous informons les utilisateurs du site <strong>IDRYMEN.fr</strong> de l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :
        </p>

        <h2>2. Éditeur du site</h2>
        <p>
            Le site <strong>IDRYMEN.fr</strong> est édité par : <br>
            IDRYMEN SARL <br>
            Adresse : 123 Rue de la Nature, 75000 Paris, France <br>
            Numéro de téléphone : +33 (0)1 23 45 67 89 <br>
            Email : contact@idrymen.fr <br>
            RCS : 123 456 789 R.C.S Paris <br>
            Capital social : 10 000 €
        </p>

        <h2>3. Hébergement</h2>
        <p>
            Le site est hébergé par : <br>
            OVH SAS <br>
            Adresse : 2 Rue Kellermann, 59100 Roubaix, France <br>
            Numéro de téléphone : +33 (0)9 72 10 10 07
        </p>

        <h2>4. Propriété Intellectuelle</h2>
        <p>
            L'ensemble du contenu du site <strong>IDRYMEN.fr</strong>, incluant, de façon non limitative, les graphismes, images, textes, vidéos,
            animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la société IDRYMEN, à l'exception des marques,
            logos ou contenus appartenant à d'autres sociétés partenaires ou auteurs.
        </p>

        <h2>5. Données Personnelles</h2>
        <p>
            Conformément à la loi Informatique et Libertés du 6 janvier 1978, modifiée en 2004, vous disposez d'un droit d'accès, de rectification,
            de modification et de suppression des données personnelles vous concernant.
            Vous pouvez exercer ce droit en envoyant un courrier à l'adresse suivante : <br>
            IDRYMEN SARL, 123 Rue de la Nature, 75000 Paris, France.
        </p>

        <h2>6. Limitations de responsabilité</h2>
        <p>
            L'éditeur ne pourra être tenu responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site
            IDRYMEN.fr, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées, soit de l’apparition d’un bug
            ou d’une incompatibilité.
        </p>

        <h2>7. Litiges</h2>
        <p>
            Les présentes conditions du site <strong>IDRYMEN.fr</strong> sont régies par les lois françaises et tout litige ou contentieux qui pourrait naître
            de l'interprétation ou de l'exécution de celles-ci sera de la compétence exclusive des tribunaux dont dépend le siège social de la société.
        </p>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-section">
            <div class="footer-logo">
                <img src="Images\logo_idrymen.webp" alt="Logo Pousse">
                <p>Reconnectez vos espaces à la nature, avec style.</p>
                <div class="footer-social-icons">
                    <a href="#"><img src="Images\insta.webp" alt="Instagram"></a>
                    <a href="#"><img src="Images/snap.webp" alt="Snapchat"></a>
                    <a href="#"><img src="Images\linkedin.webp" alt="LinkedIn"></a>
                </div>
            </div>
        </div>

        <div class="footer-section">
            <h3>Végétalisez</h3>
            <ul>
                <li><a href="index.php?controller=services&action=services#offer-entretien">Entretien</a></li>
                <li><a href="index.php?controller=services&action=services#vegetalisation-details">Végétalisation</a></li>
                <li><a href="index.php?controller=services&action=services#offer-complet">Végétalisation et Entretien</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>L'entreprise</h3>
            <ul>
                <li><a href="index.php?controller=accueil&action=accueil"></a>Accueil</li>
                <li><a href="index.php?controller=services&action=QSN">À propos</a></li>
                <li><a href="index.php?controller=services&action=services">Services</a></li>
                <li><a href="index.php?controller=accueil&action=accueil#faq">FAQ</a></li>
                <li><a href="index.php?controller=accueil&action=accueil#avis">Avis</a></li>
            </ul>
        </div>
            <div class="footer-section">
            <h3>Contactez-nous</h3>
            <ul>
                <li><a href="index.php?controller=services&action=devis">Devis</a></li>
                <li><a href="index.php?controller=contact&action=contact">Contact</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Informations Légales</h3>
            <ul>
                <li><a href="index.php?controller=mentions&action=mentions">Mentions Légales</a></li>
                <li><a href="index.php?controller=mentions&action=politique">Politique de confidentialité</a></li>
            </ul>
        </div>

        <div class="footer-credits">
            Tous droits réservés • Idrymen.fr 2024
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const hamburger = document.querySelector('.nav-hamburger');
            const navLinks = document.querySelector('.nav-links');

            hamburger.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
