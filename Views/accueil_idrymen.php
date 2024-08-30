<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>IDRYMEN Végétalisation de Bureau</title>
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
    margin: 0; /* Ensure no margin */
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

.hero {
    position: relative;
    text-align: center;
    color: white;
    overflow: hidden;
    margin: 0; /* Ensure no margin */
}

.hero-image {
    width: 100%;
    height: 300px;
    object-fit: cover;
    will-change: transform;
    margin: 0; /* Ensure no margin */
    padding: 0; /* Ensure no padding */
    padding-top: 50px;
}


.hero-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.hero-text {
    font-size: 2em;
    font-weight: bold;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
}

.hero-button {
    display: inline-block;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 1em;
    text-decoration: none;
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
    font-weight: bold;
}

.item img {
    max-width: 100%;
    height: auto;
    transform: scale(1);
    transition: transform 0.3s ease-in-out;
}

.item:hover img {
    transform: scale(1.1);
}

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
    background-color: rgba(76, 175, 80, 0.8);
    color: white;
    border: none;
    padding: 15px;
    cursor: pointer;
    border-radius: 50%;
    font-size: 30px;
    z-index: 1000;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.prev {
    left: 20px;
}

.next {
    right: 20px;
}

.prev:hover, .next:hover {
    background-color: #218838;
    transform: scale(1.1);
}

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
    overflow: hidden;
}

.faq-item.active .faq-answer {
    max-height: 500px;
    transition: max-height 0.5s ease-in;
}

.faq-question {
    font-size: 1.2em;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
    padding-top: 10px;
    color: #555;
    font-size: 1em;
    line-height: 1.5;
}

.icon {
    transition: transform 0.3s ease;
}

.faq-item.active .icon {
    transform: rotate(180deg);
}

.reviews-section {
    padding: 60px 20px;
    background-color: #ffffff;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}

.reviews-title {
    font-size: 2em;
    color: #4CAF50;
    text-align: center;
    margin-bottom: 40px;
}

.reviews-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.review {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 10px;
    max-width: 300px;
    flex: 1;
    text-align: center;
}

.reviewer {
    font-weight: bold;
    margin-bottom: 10px;
}

.stars {
    color: #FFD700;
    margin-bottom: 10px;
}

.text {
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

    <div class="hero">
        <img src="Images/fond_plante2.jpg" alt="Améliorez votre environnement de travail avec la végétalisation" class="hero-image">
        <div class="hero-content">
            <div class="hero-text">Améliorez votre environnement de travail avec la végétalisation de bureau</div>
            <a href="index.php?controller=services&action=services" class="hero-button">VÉGÉTALISER MON ESPACE DE TRAVAIL</a>
        </div>
    </div>


    

    <div class="section">
        <div class="section-content">
            <h2 class="section-title">Aménagement végétal pour des espaces de travail vivants et inspirants</h2>
            <p class="section-description">
                <strong>IDRYMEN</strong> transforme vos espaces professionnels et de vie avec des aménagements végétaux uniques et sur mesure.
            </p>
            <p class="section-description">
                Nous proposons des <strong>solutions végétales durables et innovantes</strong> pour enrichir vos bureaux et lieux de travail avec des concepts adaptés aux besoins modernes de bien-être, de flexibilité et de respect des distances. Que ce soit à travers nos formules de <strong>location de plantes</strong> à longue durée ou via nos services de vente et d'entretien, nous offrons des solutions créatives pour les environnements de travail contemporains.
            </p>
            <p class="section-description">
                Nos plantes, cultivées en <strong>hydroponie</strong>, garantissent une croissance saine et rapide, tout en demandant peu d'entretien. Vivantes et évolutives, elles apportent une dimension supplémentaire à vos espaces, favorisant la connexion avec la nature et stimulant l'engagement des collaborateurs.
            </p>
            <p class="section-description">
                Notre <strong>démarche écoresponsable</strong> repose sur des produits conçus et <strong>fabriqués en France</strong>, respectueux de l'environnement, et sur une forte implication dans des actions <strong>sociales et sociétales</strong>. Nous faisons du développement durable une priorité pour offrir des espaces plus verts et plus vivants.
            </p>
        </div>
        <img src="Images/accueil_presentation.jpg" alt="Aménagement végétal IDRYMEN" class="section-image">
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
    <div class="faq-section" id="faq">
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

    <div class="reviews-section" id="avis">
        <h2 class="reviews-title">Derniers avis de nos clients</h2>
        <div class="reviews-container">
            <div class="review">
                <div class="reviewer">Jean Dupont</div>
                <div class="stars">★★★★★</div>
                <div class="text">Service impeccable et plantes magnifiques ! Je recommande.</div>
            </div>
            <div class="review">
                <div class="reviewer">Marie Martin</div>
                <div class="stars">★★★★★</div>
                <div class="text">Un vrai bonheur pour mes collaborateurs. Les plantes transforment vraiment notre espace.</div>
            </div>
            <div class="review">
                <div class="reviewer">Pauline Petit</div>
                <div class="stars">★★★★★</div>
                <div class="text">Excellente expérience avec Idrymen. Les plantes sont en parfaite santé.</div>
            </div>
        </div>
    </div>


    <footer>
        <div class="footer-section">
            <div class="footer-logo">
                <img src="Images\logo_idrymen.webp" alt="Logo Pousse">
                <p>Végétalisez vos espaces de la meilleur des façons avec Idrymen !</p>
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
 window.addEventListener('scroll', function() {
    const heroImage = document.querySelector('.hero-image');
    let offset = window.pageYOffset;
    heroImage.style.transform = `translateY(${offset * 0.5}px)`;  // Effet parallax
});

document.querySelectorAll('.faq-item').forEach(item => {
    item.addEventListener('click', () => {
        item.classList.toggle('active');
        const answer = item.querySelector('.faq-answer');
        answer.style.maxHeight = item.classList.contains('active') ? answer.scrollHeight + 'px' : '0';
    });
});

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
    let autoSlideInterval;

    // Function to show a specific slide
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

    // Function to start the auto-slide interval
    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            showSlide(currentIndex + 1);
        }, 3000); // Auto-slide every 3 seconds
    }

    // Function to stop the auto-slide interval
    function resetAutoSlide() {
        clearInterval(autoSlideInterval); // Clear the current interval
        startAutoSlide(); // Start a new interval
    }

    // Add event listeners for the navigation buttons
    next.addEventListener('click', () => {
        showSlide(currentIndex + 1);
        resetAutoSlide(); // Reset the interval when next is clicked
    });

    prev.addEventListener('click', () => {
        showSlide(currentIndex - 1);
        resetAutoSlide(); // Reset the interval when prev is clicked
    });

    // Start the initial auto-slide
    startAutoSlide();
});

</script>


</body>
</html>
