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
            overflow: hidden;
            transition: color 0.3s ease;
        }

        .nav-item span {
            position: relative;
            z-index: 1;
        }

        /* Cadre végétal autour de l'item */
        .nav-item::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: url('Images/cadre3.png') no-repeat center;
            background-size: cover;
            z-index: 0;
            transform: translate(-50%, -50%);
            transition: all 0.5s ease-in-out;
        }

        /* Couleur de l'item au survol */
        .nav-item:hover {
            color: #2e7d32;
        }

        /* Agrandissement du cadre végétal au survol */
        .nav-item:hover::before {
            width: 70px; /* Taille ajustée pour entourer le texte */
            height: 35px; /* Ajustée en fonction de l'image */
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
