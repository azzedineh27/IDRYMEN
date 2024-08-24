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
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    margin: 0;
    padding: 0;
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
        .summary {
            display: none;
            padding: 20px;
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .summary-title {
            font-size: 1.5em;
            font-weight: bold;
            color: #4CAF50;
            margin-bottom: 10px;
        }
        .summary-content {
            font-size: 1em;
            color: #25283B;
        }
        /* Décale la liste des plantes sélectionnées vers la droite */
        .summary-content ul {
            margin-left: 20px;
        }
        /* Style pour le bouton PDF similaire au bouton "Soumettre" */
        #download-pdf {
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 15px;
        }
        #download-pdf:hover {
            background-color: #388E3C;
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
    <div class="devis-section">
        <h2 class="devis-title">Demande de Devis</h2>
        <form class="devis-form" id="devis-form" onsubmit="generateSummary(event)">
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
                <label>Budget</label>
                <label><input type="radio" name="budget" value="0-500" required>0-500€</label>
                <label><input type="radio" name="budget" value="500-1000" required>500-1000€</label>
                <label><input type="radio" name="budget" value="1000-2500" required>1000-2500€</label>
                <label><input type="radio" name="budget" value="2500-5000" required>2500-5000€</label>
                <label><input type="radio" name="budget" value="5000-10000" required>5000-10000€</label>
                <label><input type="radio" name="budget" value="plus10000" required>Plus de 10000€</label>
            </div>
            <div class="form-group">
                <button type="submit">Soumettre</button>
            </div>
        </form>
        <div class="summary" id="summary">
            <h3 class="summary-title">Récapitulatif du Devis</h3>
            <div class="summary-content" id="summary-content"></div>
            <button id="download-pdf" style="display:none;" onclick="downloadPDF()">Télécharger le PDF</button>
        </div>
    </div>
    <!-- Inclure jsPDF via CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script>
        function generateSummary(event) {
            event.preventDefault(); // Empêche l'envoi du formulaire
            // Récupère les données du formulaire
            const sizeS = parseInt(document.getElementById('size-s').value) || 0;
            const sizeM = parseInt(document.getElementById('size-m').value) || 0;
            const sizeL = parseInt(document.getElementById('size-l').value) || 0;
            const sizeXL = parseInt(document.getElementById('size-xl').value) || 0;
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const country = document.getElementById('country').value;
            const projectType = document.querySelector('input[name="projectType"]:checked').value;
            const budget = document.querySelector('input[name="budget"]:checked').value;
            // Calcul du coût total
            const totalCost = (sizeS * 10) + (sizeM * 20) + (sizeL * 30) + (sizeXL * 40);
            // Récupère la date actuelle
            const date = new Date();
            const formattedDate = date.toLocaleDateString();
            // Génère le récapitulatif
            const summaryContent = `
                <p><strong>Date :</strong> ${formattedDate}</p>
                <p><strong>Client :</strong> ${firstName} ${lastName} (${country})</p>
                <p><strong>Type de projet :</strong> ${projectType}</p>
                <p><strong>Budget :</strong> ${budget}</p>
                <p><strong>Plantes sélectionnées :</strong></p>
                <ul>
                    <li>Taille S : ${sizeS} plante(s)</li>
                    <li>Taille M : ${sizeM} plante(s)</li>
                    <li>Taille L : ${sizeL} plante(s)</li>
                    <li>Taille XL : ${sizeXL} plante(s)</li>
                </ul>
                <p><strong>Coût total :</strong> ${totalCost}€</p>
            `;
            // Affiche le récapitulatif
            document.getElementById('summary-content').innerHTML = summaryContent;
            document.getElementById('summary').style.display = 'block';
            // Affiche le bouton de téléchargement PDF
            document.getElementById('download-pdf').style.display = 'inline-block';
        }
        function downloadPDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            // Titre du document
            doc.setFontSize(18);
            doc.text('Devis réalisé par la société IDRYMEN', 105, 20, null, null, 'center');
            // Informations sur le client
            doc.setFontSize(14);
            doc.text('Informations Client', 10, 40);
            doc.setFontSize(12);
            const summaryContent = document.getElementById('summary-content').innerText.split("\n");
            let yPos = 50;
            summaryContent.forEach((line) => {
                doc.text(line.trim(), 10, yPos);
                yPos += 8;
            });
            // Télécharger le fichier PDF
            doc.save('devis_IDRYMEN.pdf');
        }
    </script>
</body>
</html>