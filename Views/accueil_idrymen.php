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
            height: 20px; /* Adjust height to match the image */
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
            height: 300px; /* Ajustez la hauteur selon vos besoins */
            object-fit: cover;
        }

        .hero-text {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2em;
            font-weight: bold;x
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
            max-width: 40%; /* Réduire la largeur maximale */
            flex-grow: 1;
            margin-right: 20px; /* Ajouter de l'espace entre le texte et l'image */
        }

        .section-title {
            font-size: 1.5em; /* Réduire la taille de la police */
            margin-bottom: 20px;
            color: #4CAF50;
        }

        .section-description {
            font-size: 1em; /* Réduire la taille de la police */
            color: #555;
        }

        .section-image {
            max-width: 40%; /* Réduire la largeur maximale */
            border-radius: 10px;
            flex-grow: 1;
            max-height: 400px; /* Ajustez cette valeur selon vos besoins */
            object-fit: cover;
            padding-left: 30px;
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
            width: 300%; /* Showing 3 images at a time */
        }

        .slide {
            flex: 1 0 33.33%; /* Take up 1/3 of the slider's width */
            padding: 0 10px; /* Spacing between images */
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

<!-- Slider Section -->
<div class="slider">
    <div class="slider-container">
        <div class="slide"><img src="Images/philendodron.jpg" alt="Philendodron"></div>
        <div class="slide"><img src="Images/opuntia.jpg" alt="Opuntia"></div>
        <div class="slide"><img src="Images/dracaena.jpg" alt="Dracaena"></div>
        <div class="slide"><img src="Images/ficus.jpeg" alt="Ficus"></div>
    </div>
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.nav-hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    // Slider Functionality
    const sliderContainer = document.querySelector('.slider-container');
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    const prev = document.querySelector('.prev');
    const next = document.querySelector('.next');
    let currentIndex = 0;

    function showSlide(index) {
        if (index >= totalSlides - 2) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = totalSlides - 3;
        } else {
            currentIndex = index;
        }
        sliderContainer.style.transform = `translateX(-${currentIndex * 33.33}%)`;
    }

    next.addEventListener('click', () => {
        showSlide(currentIndex + 1);
    });

    prev.addEventListener('click', () => {
        showSlide(currentIndex - 1);
    });

    setInterval(() => {
        showSlide(currentIndex + 1);
    }, 3000); // Auto-slide every 3 seconds
});
</script>
</body>
</html>
