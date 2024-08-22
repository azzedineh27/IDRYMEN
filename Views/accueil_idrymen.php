<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>IDRYMEN Végétalisation de Bureau</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            padding-top: 60px;
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
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            z-index: 1000;
            transition: background-color 0.3s;
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
            flex-grow: 1;
            justify-content: flex-end;
        }

        .nav-item {
            color: #4CAF50;
            padding: 10px;
            margin: 0 6px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            text-decoration: none;
        }

        .nav-item span {
            position: relative;
            z-index: 1;
        }

        .nav-item::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 0;
            height: 20px;
            background: url('Images/image.png') no-repeat left center;
            background-size: contain;
            transition: width 0.5s ease-in-out;
            z-index: 0;
        }

        .nav-item:hover::after {
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

        .hero {
            position: relative;
            text-align: center;
            color: white;
        }

        .hero-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .hero-text {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2em;
            font-weight: bold;
        }

        .hero-button {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1em;
            text-align: center;
        }

        .hero-button:hover {
            background-color: #218838;
        }

        .section {
            padding: 60px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .section-content {
            max-width: 40%;
            flex-grow: 1;
            margin-right: 20px;
        }

        .section-title {
            font-size: 1.5em;
            margin-bottom: 20px;
            color: #4CAF50;
        }

        .section-description {
            font-size: 1em;
            color: #555;
        }

        .section-image {
            max-width: 40%;
            border-radius: 10px;
            flex-grow: 1;
            max-height: 400px;
            object-fit: cover;
            padding-left: 30px;
        }

        .message {
            position: relative;
            text-align: center;
            font-size: 60px;
            color: #25283B;
            margin: 40px 0;
            font-family: 'ICA Rubrik', sans-serif;
        }

        /* Slider styles */
        .slider {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }

        .slider-container {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            flex: 0 0 33.33%;
            padding: 0 10px;
            box-sizing: border-box;
        }

        .slide img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 50%;
            font-size: 18px;
            z-index: 1000;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        /* FAQ Section */
        .faq-section {
            padding: 60px 20px;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .faq-container {
            max-width: 800px;
            width: 100%;
        }

        .faq-title {
            font-size: 2em;
            text-align: center;
            margin-bottom: 20px;
            color: #4CAF50;
        }

        .faq-description {
            font-size: 1em;
            color: #555;
            margin-bottom: 30px;
            text-align: center;
        }

        .faq-item {
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
            cursor: pointer;
            color: #333;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .faq-item .faq-question {
            font-size: 1.2em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-answer {
            display: none;
            padding-top: 10px;
            color: #555;
            font-size: 1em;
            line-height: 1.5;
        }

        .faq-item .icon {
            transition: transform 0.3s ease;
        }

        .faq-item.active .icon {
            transform: rotate(180deg);
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
            <img src="logo_idrymen.webp" alt="Logo" class="nav-logo">
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

    <div class="hero">
        <img src="Images/fond_plante2.jpg" alt="Améliorez votre environnement de travail avec la végétalisation" class="hero-image">
        <div class="hero-text">Améliorez votre environnement de travail avec la végétalisation de bureau</div>
        <button class="hero-button">VÉGÉTALISER MON ESPACE DE TRAVAIL</button>
    </div>

    <div class="section">
        <div class="section-content">
            <h2 class="section-title">Végétaliser les espaces de travail pour agir sur le bien-être au bureau</h2>
            <p class="section-description">
                <strong>GardenLink</strong> vous accompagne dans l’aménagement végétal de bureau et de vos espaces de vie et de travail.
            </p>
            <p class="section-description">
                Nous apportons des <strong>solutions végétales innovantes</strong> pour adapter les espaces de travail aux attentes de nature, de modularité, de distanciation et de protection. Nos formules de <strong>location de plantes de bureau à Paris</strong>, ou de vente plus entretien, proposent des formats novateurs et particulièrement adaptés aux nouveaux espaces de travail.
            </p>
            <p class="section-description">
                Notre système de culture est propre, basé sur <strong>l’hydroponie</strong>, permettant une croissance rapide et harmonieuse de nos plantes. Nos plantes sont vivantes et leurs évolutions contribuent à plus d’intérêt et d’interactivité avec les collaborateurs.
            </p>
            <p class="section-description">
                Notre <strong>engagement RSE</strong> s’appuie sur une gamme conçue et <strong>fabriquée en France</strong> dans une démarche <strong>écoresponsable</strong>, sur la culture de <strong>plantes vivantes</strong> et sur une forte implication <strong>sociale et sociétale</strong>.
            </p>
        </div>
        <img src="Images/accueil_presentation.jpg" alt="Végétalisation de bureau" class="section-image">
    </div>

    <div class="message">
        Découvrez nos catégories de plantes !
    </div>

    <!-- Slider Section -->
    <div class="slider">
        <div class="slider-container">
            <div class="slide"><img src="Images/philendodron.jpg" alt="Philendodron"></div>
            <div class="slide"><img src="Images/opuntia.jpg" alt="Opuntia"></div>
            <div class="slide"><img src="Images/dracaena.jpg" alt="Dracaena"></div>
            <div class="slide"><img src="Images/ficus.jpeg" alt="Ficus"></div>
            <div class="slide"><img src="Images/ficus.jpeg" alt="Ficus"></div>
            <div class="slide"><img src="Images/ficus.jpeg" alt="Ficus"></div>
            <div class="slide"><img src="Images/ficus.jpeg" alt="Ficus"></div>
            <div class="slide"><img src="Images/ficus.jpeg" alt="Ficus"></div>
        </div>
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </div>

    <!-- FAQ Section -->
    <div class="faq-section">
        <div class="faq-container">
            <h2 class="faq-title">Questions fréquentes</h2>
            <p class="faq-description">
                Vous avez une question concernant la végétalisation de votre bureau ? Consultez notre FAQ ci-dessous.
                Si vous ne trouvez pas de réponse à votre demande, contactez nous grâce à la page de contact en haut à droite. 
            </p>

            <div class="faq-item">
                <div class="faq-question">1. Quelle est la différence entre l'achat et la location de plantes ?<span class="icon">&#x25BC;</span></div>
                <div class="faq-answer">
                    Lors de l'achat, les plantes sont à vous. L'entretien et la garantie des plantes ne sont pas inclus.
                    Il faut souscrire à un contrat d'entretien pour la garantie reprise des plantes. Lors de l'abonnement,
                    l'entretien est inclus, ainsi que la garantie reprise.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">2. Quelles offres proposez-vous pour végétaliser un bureau ?<span class="icon">&#x25BC;</span></div>
                <div class="faq-answer">
                    Nous proposons des offres de végétalisation adaptées aux bureaux de toutes tailles, avec des plantes
                    sélectionnées pour améliorer l'atmosphère et la qualité de vie au travail.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">3. Quelle est la durée d'un contrat d'abonnement de plantes ?<span class="icon">&#x25BC;</span></div>
                <div class="faq-answer">
                    La durée minimale d'un contrat d'abonnement est de 12 mois. Elle peut être ajustée en fonction de vos besoins.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">4. Comment fonctionne la maintenance des plantes ?<span class="icon">&#x25BC;</span></div>
                <div class="faq-answer">
                    Nos experts se chargent de l'arrosage, de la fertilisation, de la taille et du remplacement des plantes
                    si nécessaire. Nous nous assurons que vos plantes restent en bonne santé tout au long de l'année.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">5. Est-ce que l'abonnement inclut la rotation des plantes ?<span class="icon">&#x25BC;</span></div>
                <div class="faq-answer">
                    Oui, dans le cadre de l'abonnement, nous effectuons une rotation des plantes pour garantir qu'elles
                    s'épanouissent dans votre environnement.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">6. Quels sont les avantages d'avoir des plantes dans les bureaux ?<span class="icon">&#x25BC;</span></div>
                <div class="faq-answer">
                    Les plantes améliorent la qualité de l'air, réduisent le stress et augmentent la productivité.
                    Elles contribuent également à créer un environnement de travail agréable et inspirant.
                </div>
            </div>
        </div>
    </div>

    <script>
        // FAQ Toggle Functionality
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        });
    </script>

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
</body>
</html>
