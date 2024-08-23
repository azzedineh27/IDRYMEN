<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel']; 
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'azzedinehatem@gmail.com';
        $mail->Password = 'uhjn odic cxzd deco'; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Port = 587;

        $mail->setFrom('azzedinehatem@gmail.com', 'Expediteur');
        $mail->addAddress('azzedinehatem@gmail.com', 'Nom du Destinataire');

        $mail->isHTML(true);
        $mail->Body    = "Message de : $name <br>Email: $email<br>Téléphone: $tel<br><br>$message";
        $mail->AltBody = "Message de : $name \nEmail: $email\nTéléphone: $tel\n\n$message"; 

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );        

        $mail->send();
        $message = 'Message envoyé avec succès !';
    } catch (Exception $e) {
        echo 'Message non envoyé. Erreur: ', $mail->ErrorInfo;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contactez-nous</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <style>
        @import url('https://fonts.cdnfonts.com/css/ica-rubrik-black');
        @import url('https://fonts.cdnfonts.com/css/poppins');
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding-top: 80px;

    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 80vh;
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

.notification {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.95); /* Légère transparence pour correspondre au design général */
    color: #4CAF50; /* Couleur principale de la charte graphique */
    padding: 20px 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); /* Ombre plus prononcée pour plus de profondeur */
    opacity: 1;
    transition: opacity 0.5s ease;
    animation: fadeIn 0.5s ease;
    font-family: 'Poppins', sans-serif; /* Police principale utilisée */
    font-size: 1em;
    text-align: center;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translate(-50%, -50%) scale(0.8);
    }
    to {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }
}

.notification.success {
    border: 2px solid #4CAF50; 
}

.notification.error {
    border: 2px solid #ff5252;
    color: #ff5252; 
}

/* Animation de vol des feuilles de gauche à droite */
@keyframes fly {
    0% {
        transform: translateX(-100vw) rotate(0deg);
    }
    100% {
        transform: translateX(100vw) rotate(360deg);
    }
}

.leaf {
    position: absolute;
    top: 50%; /* Ajustez cette valeur pour déterminer la hauteur de départ de la feuille */
    width: 50px;
    height: 50px;
    background-image: url('Images/feuille.png');
    background-size: contain;
    background-repeat: no-repeat;
    animation: fly 10s linear infinite;
    pointer-events: none; /* Les feuilles ne doivent pas interférer avec les clics */
}

/* Optionnel : Variations pour que les feuilles ne volent pas toutes de la même manière */
.leaf:nth-child(1) {
    animation-duration: 8s; /* Différentes durées pour plus de variété */
    top: 20%; /* Différentes hauteurs pour chaque feuille */
}

.leaf:nth-child(2) {
    animation-duration: 12s;
    top: 40%;
}

.leaf:nth-child(3) {
    animation-duration: 10s;
    top: 60%;
}

.leaf:nth-child(4) {
    animation-duration: 14s;
    top: 80%;
}


.formulaire-section {
    background: rgba(255, 255, 255, 0.8);
    padding: 25px 45px 25px 25px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 350px;
    margin: 0 auto;
}

.formulaire-section h2 {
    margin-bottom: 15px;
    font-size: 1.5em;
    text-align: center;
    color: #4CAF50;
    font-weight: bold;
}

.formulaire-section form {
    display: grid;
    grid-gap: 10px;
}

.formulaire-section label {
    font-weight: bold;
}

.formulaire-section input,
.formulaire-section textarea {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    transition: border-color 0.3s ease;
    resize: none;
}

.formulaire-section input:focus,
.formulaire-section textarea:focus {
    border-color: #4CAF50;
}

.formulaire-section button {
    padding: 10px;
    border-radius: 5px;
    border: none;
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    transition: background 0.3s ease;
    width: 100%;
}

.formulaire-section button:hover {
    background-color: #218838;
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

   <!-- Feuilles flottantes en arrière-plan -->
   <div class="leaf"></div>
    <div class="leaf"></div>
    <div class="leaf"></div>
    <div class="leaf"></div>
    <div class="leaf"></div>

<div class="formulaire-section">
    <h2>Contactez-nous</h2>
    <form method="post">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="tel">Téléphone:</label>
        <input type="tel" id="tel" name="tel" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit" name="submit">Envoyer</button>
    </form>

    <div id="message-container" class="notification">
    <?php if (isset($message)) { ?>
        <?php echo $message; ?>
    <?php } ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Hamburger menu functionality for mobile responsiveness
    const hamburger = document.querySelector('.nav-hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    // Notification handling after form submission
    <?php if (isset($message)) { ?>
        var notification = document.getElementById('message-container');
        notification.style.display = 'block';
        setTimeout(function(){
            notification.style.opacity = '0';
            setTimeout(function(){
                notification.style.display = 'none';
            }, 1000); 
        }, 2000);
    <?php } ?>
});


</script>
    
</body>
</html>
