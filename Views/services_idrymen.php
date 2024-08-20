<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>IDRYMEN - Nos Services</title>
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

        .nav-item:hover {
            color: #218838;
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
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .offer:hover {
            transform: translateY(-5px);
        }

        .offer-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .offer-title {
            font-size: 1.5em;
            color: #4CAF50;
        }

        .offer-description {
            flex-grow: 1;
            margin-left: 20px;
            color: #555;
            font-size: 1em;
        }

        .offer-price {
            font-size: 1.5em;
            color: #333;
        }

        .arrow {
            font-size: 24px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .arrow.down {
            transform: rotate(0deg);
        }

        .arrow.up {
            transform: rotate(180deg);
        }

        .offer-content {
            display: none;
            padding: 20px;
            background-color: #fafafa;
            border-top: 1px solid #ccc;
        }

        .offer-content h3 {
            margin-top: 0;
            color: #4CAF50;
        }

        .offer-content ul {
            padding-left: 20px;
        }

        .offer-content li {
            margin-bottom: 10px;
        }

        footer {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .footer-item {
            color: #4CAF50;
            padding: 10px;
            margin: 0 6px;
            text-decoration: none;
            transition: color 0.3s ease, background-color 0.3s ease;
            border-radius: 20px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footer-item:hover {
            color: #218838;
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

<h1>Nos Offres</h1>

<div class="container">

    <div class="offer" id="offer-entretien">
        <div class="offer-header">
            <div class="offer-title">Entretien</div>
            <div class="offer-description">Maintenance complète de vos plantes pour un espace vert et harmonieux.</div>
            <div class="offer-price">À partir de 100€</div>
            <span class="arrow down" onclick="toggleDetails('entretien-details')">&#x25BC;</span>
        </div>
        <div class="offer-content" id="entretien-details">
            <h3>Étapes de l'entretien</h3>
            <ul>
                <li>Évaluation de vos plantes existantes</li>
                <li>Nettoyage régulier des plantes et des pots</li>
                <li>Arrosage et fertilisation</li>
                <li>Surveillance de la santé des plantes</li>
                <li>Remplacement des plantes si nécessaire</li>
            </ul>
        </div>
    </div>

    <div class="offer" id="offer-vegetalisation">
        <div class="offer-header">
            <div class="offer-title">Végétalisation</div>
            <div class="offer-description">Transformez votre espace de travail en un havre de nature et de bien-être.</div>
            <div class="offer-price">À partir de 200€</div>
            <span class="arrow down" onclick="toggleDetails('vegetalisation-details')">&#x25BC;</span>
        </div>
        <div class="offer-content" id="vegetalisation-details">
            <h3>Étapes de la végétalisation</h3>
            <ul>
                <li>Consultation et conception personnalisée</li>
                <li>Sélection des plantes adaptées à votre espace</li>
                <li>Installation de solutions de végétalisation</li>
                <li>Optimisation pour un entretien facile</li>
                <li>Suivi après installation</li>
            </ul>
        </div>
    </div>

    <div class="offer" id="offer-complet">
        <div class="offer-header">
            <div class="offer-title">Végétalisation + Entretien</div>
            <div class="offer-description">Profitez d'un espace vert avec un entretien régulier sans soucis.</div>
            <div class="offer-price">À partir de 300€</div>
            <span class="arrow down" onclick="toggleDetails('complet-details')">&#x25BC;</span>
        </div>
        <div class="offer-content" id="complet-details">
            <h3>Étapes combinées</h3>
            <ul>
                <li>Conception et installation de la végétalisation</li>
                <li>Entretien complet régulier des plantes</li>
                <li>Surveillance de la santé des plantes</li>
                <li>Remplacement des plantes si nécessaire</li>
                <li>Support continu pour optimiser la végétalisation</li>
            </ul>
        </div>
    </div>

</div>

<footer>
    <div class="footer-links">
        <a href="about.html" class="footer-item"><span>À propos</span></a>
        <a href="rgpd_idrymen.html" class="footer-item"><span>Politique de Confidentialité</span></a>
        <a href="terms.html" class="footer-item"><span>Conditions</span></a>
        <a href="contact_idrymen.php" class="footer-item"><span>Contact</span></a>
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
</script>

</body>

</html>
