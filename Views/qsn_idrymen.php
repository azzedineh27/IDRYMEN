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
            transition: color 0.3s ease;
        }

        .nav-item span {
            position: relative;
            z-index: 1;
        }

        .nav-item::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: #4CAF50;
            z-index: 0;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .nav-item:hover::before {
            transform: translate(-50%, -50%) scale(1.3);
        }

        .nav-item:hover {
            color: white;
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

        .histoire-texte {
            flex: 1;
            min-width: 300px;
        }

        .image-equipe, .image-cinema {
            flex-basis: 400px;
            max-width: 100%;
            width: 100%;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
            margin-top: 20px;
        }

        .histoire-section {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            gap: 20px;
        }

        .txt-grp, .txt-equipe {
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
            margin-bottom: 20px;
        }

        .footer-logo img {
            max-width: 120px;
            margin-bottom: 10px;
        }

        .footer-social-icons {
            display: flex;
            gap: 20px;
            margin-left: 20px;
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
            margin-right: 20px;
            font-size: 14px;
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
                        <p>Bonjour à tous, nous sommes l'équipe de FAST AUTO et nous vous souhaitons la bienvenue ! En parcourant les différentes pages,
                            vous pourrez retrouver une sélection complète de voitures ainsi que les informations les concernant.</p>
                    </div>
                </div>
                <div class="image-equipe">
                    <img src="Images/qsn_3.png" alt="Notre équipe">
                </div>
            </div>
            <div class="histoire">
                <div class="histoire-section">
                    <div class="histoire-texte">
                        <div class="titre-grp">
                            <h1>Notre histoire</h1>
                        </div>
                        <div class="txt-grp">
                            <p>Depuis notre création en 2024, notre objectif a toujours été de fournir à nos utilisateurs une expérience automobile unique. Nous combinons passion et expertise technique pour créer un site qui va au-delà de la simple consultation de véhicules. Notre voyage a commencé dans une petite salle, et aujourd'hui, nous sommes fiers de toucher des milliers de passionnés à travers le pays.</p>
                        </div>
                    </div>
                    <div class="image-cinema">
                        <img src="Images/qsn_4.png" alt="Notre histoire">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-section">
            <div class="footer-logo">
                <img src="logo_pousse.png" alt="Logo Pousse">
                <p>Reconnectez vos espaces à la nature, avec style.</p>
                <div class="rating">
                    <img src="google.png" alt="Google Rating"> 4.5/5
                </div>
            </div>
        </div>

        <div class="footer-section">
            <h3>Végétalisez</h3>
            <ul>
                <li><a href="#">Bureaux</a></li>
                <li><a href="#">Jardins et terrasses</a></li>
                <li><a href="#">Hôtel</a></li>
                <li><a href="#">Événements</a></li>
                <li><a href="#">Mur végétal</a></li>
                <li><a href="#">Atelier Team-building</a></li>
                <li><a href="#">Plantes artificielles</a></li>
                <li><a href="#">Logo végétal</a></li>
                <li><a href="#">Toiture végétalisée</a></li>
                <li><a href="#">Entretien</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Louez</h3>
            <ul>
                <li><a href="#">Location événementielle</a></li>
                <li><a href="#">Location annuelle</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>L'entreprise</h3>
            <ul>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Journal</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Paysagiste</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Contactez-nous</h3>
            <ul>
                <li><a href="#">Devis</a></li>
                <li><a href="#">Paris</a></li>
                <li><a href="#">Bordeaux</a></li>
                <li><a href="#">Lyon</a></li>
            </ul>
        </div><div class="footer-social-icons">
            <a href="#"><img src="Images\insta.webp" alt="Instagram"></a>
            <a href="#"><img src="Images/snap.webp" alt="Pinterest"></a>
            <a href="#"><img src="Images\linkedin.webp" alt="LinkedIn"></a>
        </div>
            <div class="footer-credits">
                Tous droits réservés • Pousse.fr 2023
        </div>
    </footer>

    

</body>
</html>
