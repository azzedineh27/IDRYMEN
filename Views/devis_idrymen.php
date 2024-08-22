<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <title>Devis</title>
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

        .devis-section {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
        }

        .devis-title {
            font-size: 2em;
            font-weight: bold;
            color: #4CAF50;
            margin-bottom: 20px;
            text-align: center;
        }

        .devis-form {
            width: 100%;
            max-width: 600px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 8px;
            color: #25283B;
        }

        .form-group input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }

        .form-group button {
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group button:hover {
            background-color: #388E3C;
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

    <div class="devis-section">
        <h2 class="devis-title">Demande de Devis</h2>
        <form class="devis-form" id="devis-form">
            <div class="form-group">
                <label for="plant-sizes">Sélectionnez la taille des plantes et la quantité</label>
                <div>
                    <label>Taille S (10-50 cm) - 10€</label>
                    <input type="number" id="size-s" name="size_s" min="0" value="0">
                </div>
                <div>
                    <label>Taille M (50-80 cm) - 20€</label>
                    <input type="number" id="size-m" name="size_m" min="0" value="0">
                </div>
                <div>
                    <label>Taille L (80-120 cm) - 30€</label>
                    <input type="number" id="size-l" name="size_l" min="0" value="0">
                </div>
                <div>
                    <label>Taille XL (120-200 cm) - 40€</label>
                    <input type="number" id="size-xl" name="size_xl" min="0" value="0">
                </div>
            </div>
            <!-- Champs supplémentaires (Prénom, Nom, Pays, etc.) -->
            <div class="form-group">
                <label for="firstName">Prénom</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Nom</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="country">Pays</label>
                <input type="text" id="country" name="country" required>
            </div>
            <div class="form-group">
                <label>Type de projet</label>
                <label><input type="radio" name="projectType" value="Entretien" required>Entretien</label>
                <label><input type="radio" name="projectType" value="Végétalisation" required>Végétalisation</label>
                <label><input type="radio" name="projectType" value="Entretien et Végétalisation" required>Entretien et Végétalisation</label>
            </div>
            <div class="form-group">
                <button type="submit">Soumettre</button>
            </div>
        </form>
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
</body>

</html>
