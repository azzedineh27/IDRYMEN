<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDRYMEN Politique de Confidentialité</title>
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

        .main-content h1, .main-content h2 {
            color: #4CAF50;
        }

        .main-content h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            text-align: center;
        }

        .main-content h2 {
            font-size: 1.75em;
            margin-top: 20px;
        }

        .main-content p, .main-content ul {
            line-height: 1.6;
            font-size: 1.1em;
            margin: 10px 0;
        }

        .main-content ul {
            padding-left: 20px;
            list-style: disc;
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

    <!-- Navigation -->
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
        <h1>Politique de Confidentialité</h1>

        <h2>1. Introduction</h2>
        <p>
            La présente politique de confidentialité décrit comment <strong>IDRYMEN</strong> collecte, utilise et protège les informations personnelles
            que vous nous fournissez lorsque vous utilisez notre site web <strong>IDRYMEN.fr</strong>.
        </p>

        <h2>2. Données collectées</h2>
        <p>
            Nous collectons différentes catégories de données personnelles, telles que :
            <ul>
                <li>Informations de contact (nom, adresse e-mail, numéro de téléphone, etc.)</li>
                <li>Informations de navigation (adresse IP, pages visitées, etc.)</li>
                <li>Informations fournies via des formulaires de contact ou de demande de devis.</li>
            </ul>
        </p>

        <h2>3. Utilisation des données</h2>
        <p>
            Les informations que nous recueillons sont utilisées pour :
            <ul>
                <li>Répondre à vos demandes et vous fournir nos services.</li>
                <li>Améliorer votre expérience utilisateur sur notre site.</li>
                <li>Vous envoyer des communications marketing si vous avez donné votre consentement explicite.</li>
            </ul>
        </p>

        <h2>4. Partage des données</h2>
        <p>
            Vos données personnelles ne sont jamais vendues ou partagées avec des tiers à des fins commerciales sans votre consentement explicite.
            Cependant, nous pouvons partager vos informations avec nos prestataires de services qui traitent les données pour notre compte,
            conformément aux exigences du RGPD.
        </p>

        <h2>5. Cookies</h2>
        <p>
            Nous utilisons des cookies pour améliorer votre expérience sur notre site, analyser l'utilisation du site et personnaliser le contenu.
            Vous pouvez configurer votre navigateur pour refuser tous les cookies ou pour indiquer quand un cookie est envoyé.
        </p>

        <h2>6. Sécurité des données</h2>
        <p>
            Nous prenons des mesures de sécurité appropriées pour protéger vos données contre l'accès non autorisé, la divulgation, l'altération ou
            la destruction. Cependant, aucune méthode de transmission sur Internet ou de stockage électronique n'est sécurisée à 100 %.
        </p>

        <h2>7. Vos droits</h2>
        <p>
            Conformément à la législation en vigueur, vous avez le droit d'accéder à vos données, de les corriger, de les supprimer ou de limiter
            leur traitement. Pour exercer ces droits, veuillez nous contacter à l'adresse suivante :
            <br>IDRYMEN SARL, 123 Rue de la Nature, 75000 Paris, France, ou par e-mail à <a href="mailto:contact@idrymen.fr">contact@idrymen.fr</a>.
        </p>

        <h2>8. Modifications de la politique de confidentialité</h2>
        <p>
            Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment. Toute modification sera publiée sur cette
            page avec la date de la dernière mise à jour. Nous vous encourageons à consulter régulièrement cette page pour rester informé des
            éventuelles mises à jour.
        </p>

        <h2>9. Contact</h2>
        <p>
            Si vous avez des questions concernant cette politique de confidentialité, vous pouvez nous contacter à l'adresse suivante :
            <br>IDRYMEN SARL, 123 Rue de la Nature, 75000 Paris, France, ou par e-mail à <a href="mailto:contact@idrymen.fr">contact@idrymen.fr</a>.
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
