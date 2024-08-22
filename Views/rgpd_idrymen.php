<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Politique de confidentialité</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.cdnfonts.com/css/ica-rubrik-black');
        @import url('https://fonts.cdnfonts.com/css/poppins');
        body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
}

.main-content {
    flex: 1;
    padding: 40px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 20px auto;
    max-width: 800px;
    border-radius: 8px;
}

h1, h2 {
    color: #1a1a1a;
    font-family: 'Helvetica', 'Arial', sans-serif;
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

.footer-item span {
    position: relative;
    z-index: 1;
}

.footer-item::before {
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

.footer-item:hover::before {
    transform: translate(-50%, -50%) scale(1.3);
}

.footer-item:hover {
    color: white;
}

    </style>
</head>
<body>
    <header>
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
    </header>
    <div class="main-content">
        <h1>Politique de Protection des Données Personnelles</h1>
        <p>Nous, FAST AUTO, traitons des données à caractère personnel vous concernant en tant que responsable de traitement dans le cadre de l’utilisation de notre site internet.</p>

        <p>Nous respectons votre vie privée et protégeons vos données à caractère personnel conformément à la législation en vigueur, notamment la loi 78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés et le règlement (UE) 2016/679 du 27 avril 2016 relatif à la protection des données personnelles (le "RGPD").</p>

        <h2>Données Collectées</h2>
        <p>Nous collectons les données personnelles suivantes :</p>
        <ul>
            <li>Données d'identité : nom, prénom, adresse, courriel.</li>
            <li>Données démographiques : sexe, âge.</li>
            <li>Données de géolocalisation (avec votre consentement).</li>
            <li>Données d'authentification : identifiant et mot de passe.</li>
            <li>Données de connexion : date et heure de connexion, durée de connexion, pages vues.</li>
            <li>Données de navigation : adresse IP, type de terminal utilisé, système d'exploitation.</li>
        </ul>

        <h2>Bases Légales du Traitement</h2>
        <p>Nous traitons vos données personnelles sur les bases légales suivantes :</p>
        <ul>
            <li>Le contrat : pour l'exécution des contrats que vous avez souscrits avec nous.</li>
            <li>Le consentement : lorsque vous avez donné votre consentement explicite.</li>
            <li>L'intérêt légitime : pour améliorer nos services et vous offrir une meilleure expérience utilisateur.</li>
            <li>La loi : pour nous conformer à nos obligations légales.</li>
        </ul>

        <h2>Finalités du Traitement</h2>
        <p>Nous utilisons vos données pour les finalités suivantes :</p>
        <ul>
            <li>Gestion de votre compte utilisateur et authentification.</li>
            <li>Gestion des commandes et des paiements.</li>
            <li>Communication et gestion de la relation client.</li>
            <li>Sécurité des services et lutte contre la fraude.</li>
            <li>Marketing direct et envoi de newsletters (avec votre consentement).</li>
            <li>Analyse de l’audience et amélioration de nos services.</li>
        </ul>

        <h2>Destinataires des Données</h2>
        <p>Vos données personnelles sont destinées à :</p>
        <ul>
            <li>Nos services internes et personnels habilités.</li>
            <li>Nos filiales et partenaires commerciaux.</li>
            <li>Nos sous-traitants dans le respect des finalités définies.</li>
            <li>Autorités légales et administratives lorsque requis.</li>
        </ul>

        <h2>Transfert des Données</h2>
        <p>Vos données personnelles peuvent être transférées hors de l'Union européenne avec des garanties appropriées pour assurer leur protection, telles que des clauses contractuelles types.</p>

        <h2>Durée de Conservation</h2>
        <p>Nous conservons vos données personnelles pendant la durée nécessaire aux finalités pour lesquelles elles ont été collectées :</p>
        <ul>
            <li>Données de compte inactif : 3 ans après la dernière interaction.</li>
            <li>Données de commande : 10 ans après la dernière commande.</li>
        </ul>

        <h2>Vos Droits</h2>
        <p>Vous disposez des droits suivants :</p>
        <ul>
            <li>Droit d'accès : obtenir des informations sur les données personnelles détenues vous concernant.</li>
            <li>Droit de rectification : corriger les données inexactes.</li>
            <li>Droit d'effacement : demander la suppression des données.</li>
            <li>Droit à la limitation : restreindre le traitement de vos données.</li>
            <li>Droit à la portabilité : recevoir une copie de vos données dans un format structuré.</li>
            <li>Droit d'opposition : vous opposer au traitement de vos données pour des motifs légitimes.</li>
        </ul>

        <p>Pour exercer vos droits, veuillez nous contacter à [adresse e-mail] ou par la page de contact, accompagné d'une copie de votre pièce d'identité.</p>

        <h2>Sécurité des Données</h2>
        <p>Nous mettons en œuvre des mesures techniques et organisationnelles pour protéger vos données contre les accès non autorisés, les pertes, altérations ou divulgations.</p>

        <h2>Mise à Jour de la Politique</h2>
        <p>Cette politique de confidentialité peut être modifiée à tout moment. Nous vous invitons à la consulter régulièrement.</p>

        <h2>Contact</h2>
        <p>Pour toute question, vous pouvez nous contacter à [adresse e-mail] ou par courrier à [adresse postale].</p>

        <p>Dernière mise à jour : 28/06/2024.</p>
    </div>
    <footer>
        <div class="footer-links">
            <a href="qsn_idrymen.html" class="footer-item"><span>Qui sommes-nous</span></a>
            <a href="rgpd_idrymen.html" class="footer-item"><span>Politique de Confidentialité</span></a>
            <a href="terms.html" class="footer-item"><span>Conditions</span></a>
            <a href="contact.html" class="footer-item"><span>Contact</span></a>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    // Hamburger menu functionality for mobile responsiveness
    const hamburger = document.querySelector('.nav-hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
    
    // Disable right-click to protect content
    document.addEventListener('contextmenu', function(event) {
        event.preventDefault();
    });
});

    </script>
</body>
</html>
