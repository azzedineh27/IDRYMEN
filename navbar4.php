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
            background-color: #ffffff;
            z-index: 1000;
            transition: background-color 0.3s ease;
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

        /* Animation des feuilles */
        .nav-item::before,
        .nav-item::after {
            content: "";
            position: absolute;
            background: url('Images/feuille.png') no-repeat center;
            background-size: 30px 30px;
            width: 30px;
            height: 30px;
            opacity: 0;
            transform: scale(0.5);
            transition: all 0.3s ease-in-out;
        }

        /* Positionner la première feuille */
        .nav-item::before {
            top: -10px;
            left: -30px;
        }

        /* Positionner la deuxième feuille */
        .nav-item::after {
            bottom: -10px;
            right: -30px;
        }

        /* Couleur de l'item au survol */
        .nav-item:hover {
            color: #2e7d32;
        }

        /* Animation des feuilles au survol */
        .nav-item:hover::before,
        .nav-item:hover::after {
            opacity: 1;
            transform: scale(1);
        }

        /* Ajout d'une ombre douce lors du survol pour un effet flottant */
        nav:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        /* Menu hamburger pour petits écrans */
        .nav-hamburger {
            display: none;
            font-size: 24px;
            cursor: pointer;
            color: #4CAF50;
        }

        /* Responsive */
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

        /* Ajout de dégradé sur l'arrière-plan de la navbar pour un effet de lumière naturelle */
        nav {
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.8), rgba(245, 245, 245, 1));
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
            <a href="#" class="nav-item"><span>Accueil</span></a>
            <a href="#" class="nav-item"><span>Services</span></a>
            <a href="#" class="nav-item"><span>Offres</span></a>
            <a href="#" class="nav-item"><span>Contact</span></a>
            <a href="#" class="nav-item"><span>Devis</span></a>
        </div>
    </nav>

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
